<?php
namespace Xacmlphp\Operation;

/**
 *
 * @author Olivier Maridat (Trialog)
 *        
 */
class DataTypeConstants
{

    const String = 'http://www.w3.org/2001/XMLSchema#string';

    const Boolean = 'http://www.w3.org/2001/XMLSchema#boolean';

    const Integer = 'http://www.w3.org/2001/XMLSchema#integer';

    const Double = 'http://www.w3.org/2001/XMLSchema#double';

    const Time = 'http://www.w3.org/2001/XMLSchema#time';

    const Date = 'http://www.w3.org/2001/XMLSchema#date';

    const DateTime = 'http://www.w3.org/2001/XMLSchema#dateTime';

    const DayTimeDuration = 'http://www.w3.org/2001/XMLSchema#dayTimeDuration';

    const YearMonthDuration = 'http://www.w3.org/2001/XMLSchema#yearMonthDuration';

    const AnyURI = 'http://www.w3.org/2001/XMLSchema#anyURI';

    const HexBinary = 'http://www.w3.org/2001/XMLSchema#hexBinary';

    const Base64Binary = 'http://www.w3.org/2001/XMLSchema#base64Binary';

    const Rfc822Name = 'urn:oasis:names:tc:xacml:1.0:data-type:rfc822Name';

    const X500Name = 'urn:oasis:names:tc:xacml:1.0:data-type:x500Name';

    const IpAddress = 'urn:oasis:names:tc:xacml:2.0:data-type:ipAddress';

    const DnsName = 'urn:oasis:names:tc:xacml:2.0:data-type:dnsName';
}