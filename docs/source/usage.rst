Usage
=====

Packet allows the creation of diagrams to illustrate the structure and contents of bit fields such as a network packet.

A packet is created by defining the fields within it, then adding those fields to the packet instance.

A field can be specified by:

* the start bit only; creates a one bit field
* the start bit and end bit; start() must be called before end()
* the start bit and length
* the length only; the field starts immediately after the previous field

All fields must have a description.

.. note::
    Fields **must** be added to the packet in the correct order

Example
-------

A TCP packet

.. code-block:: php

    // The packet fields
    $fields = [];
    $fields[] = (new Field('Source Port'))->length(16);
    $fields[] = (new Field('Destination Port'))->length(16);
    $fields[] = (new Field('Sequence Number'))->length(32);
    $fields[] = (new Field('Acknowledgment Number'))->length(32);
    $fields[] = (new Field('Data Offset'))->start(96)->end(99);
    $fields[] = (new Field('Reserved'))->start(100)->length(6);
    $fields[] = (new Field('URG'))->start(106);
    $fields[] = (new Field('ACK'))->start(107);
    $fields[] = (new Field('PSH'))->start(108);
    $fields[] = (new Field('RST'))->start(109);
    $fields[] = (new Field('SYN'))->start(110)->end(110);
    $fields[] = (new Field('FIN'))->start(111)->length(1);
    $fields[] = (new Field('Window'))->start(112)->end(127);
    $fields[] = (new Field('Checksum'))->start(128)->end(143);
    $fields[] = (new Field('Urgent Pointer'))->start(144)->end(159);
    $fields[] = (new Field('(Options and Padding)'))->start(160)->end(191));
    $fields[] = (new Field('Data (variable length)'))->start(192)->end(255)');

    // Create the packet

    Mermaid::create(Packet::class)
        ->withTitle('TCP Packet')
        ->withFields(...$fields)
        ->render()
    ;
