<?php
namespace Xacmlphp\Operation;

/**
 *
 * @author Olivier Maridat (Trialog)
 *        
 */
class FunctionConstants
{

    const StringEqual = 'urn:oasis:names:tc:xacml:1.0:function:string-equal';

    const BooleanEqual = 'urn:oasis:names:tc:xacml:1.0:function:boolean-equal';

    const IntegerEqual = 'urn:oasis:names:tc:xacml:1.0:function:integer-equal';

    const DoubleEqual = 'urn:oasis:names:tc:xacml:1.0:function:double-equal';

    const DateEqual = 'urn:oasis:names:tc:xacml:1.0:function:date-equal';

    const TimeEqual = 'urn:oasis:names:tc:xacml:1.0:function:time-equal';

    const DateTimeEqual = 'urn:oasis:names:tc:xacml:1.0:function:dateTime-equal';

    const DayTimeDurationEqual = 'urn:oasis:names:tc:xacml:3.0:function:dayTimeDuration-equal';

    const YearMonthDurationEqual = 'urn:oasis:names:tc:xacml:3.0:function:yearMonthDuration-equal';

    const StringEqualIgnoreCase = 'urn:oasis:names:tc:xacml:3.0:function:string-equal-ignore-case';

    const AnyURIEqual = 'urn:oasis:names:tc:xacml:1.0:function:anyURI-equal';

    const X500NameEqual = 'urn:oasis:names:tc:xacml:1.0:function:x500Name-equal';

    const Rfc822NameEqual = 'urn:oasis:names:tc:xacml:1.0:function:rfc822Name-equal';

    const HexBinaryEqual = 'urn:oasis:names:tc:xacml:1.0:function:hexBinary-equal';

    const Base64BinaryEqual = 'urn:oasis:names:tc:xacml:1.0:function:base64Binary-equal';

    const IntegerAdd = 'urn:oasis:names:tc:xacml:1.0:function:integer-add';

    const DoubleAdd = 'urn:oasis:names:tc:xacml:1.0:function:double-add';

    const IntegerSubtract = 'urn:oasis:names:tc:xacml:1.0:function:integer-subtract';

    const DoubleSubtract = 'urn:oasis:names:tc:xacml:1.0:function:double-subtract';

    const IntegerMultiply = 'urn:oasis:names:tc:xacml:1.0:function:integer-multiply';

    const DoubleMultiply = 'urn:oasis:names:tc:xacml:1.0:function:double-multiply';

    const IntegerDivide = 'urn:oasis:names:tc:xacml:1.0:function:integer-divide';

    const DoubleDivide = 'urn:oasis:names:tc:xacml:1.0:function:double-divide';

    const IntegerMod = 'urn:oasis:names:tc:xacml:1.0:function:integer-mod';

    const IntegerAbs = 'urn:oasis:names:tc:xacml:1.0:function:integer-abs';

    const DoubleAbs = 'urn:oasis:names:tc:xacml:1.0:function:double-abs';

    const Round = 'urn:oasis:names:tc:xacml:1.0:function:round';

    const Floor = 'urn:oasis:names:tc:xacml:1.0:function:floor';

    const StringNormalizeSpace = 'urn:oasis:names:tc:xacml:1.0:function:string-normalize-space';

    const StringNormalizeToLowerCase = 'urn:oasis:names:tc:xacml:1.0:function:string-normalize-to-lower-case';

    const DoubleToInteger = 'urn:oasis:names:tc:xacml:1.0:function:double-to-integer';

    const IntegerToDouble = 'urn:oasis:names:tc:xacml:1.0:function:integer-to-double';

    const OrFunction = 'urn:oasis:names:tc:xacml:1.0:function:or';

    const AndFunction = 'urn:oasis:names:tc:xacml:1.0:function:and';

    const NOfFunction = 'urn:oasis:names:tc:xacml:1.0:function:n-of';

    const NotFunction = 'urn:oasis:names:tc:xacml:1.0:function:not';

    const IntegerGreaterThan = 'urn:oasis:names:tc:xacml:1.0:function:integer-greater-than';

    const IntegerGreaterThanOrEqual = 'urn:oasis:names:tc:xacml:1.0:function:integer-greater-than-or-equal';

    const IntegerLessThan = 'urn:oasis:names:tc:xacml:1.0:function:integer-less-than';

    const IntegerLessThanOrEqual = 'urn:oasis:names:tc:xacml:1.0:function:integer-less-than-or-equal';

    const DoubleGreaterThan = 'urn:oasis:names:tc:xacml:1.0:function:double-greater-than';

    const DoubleGreaterThanOrEqual = 'urn:oasis:names:tc:xacml:1.0:function:double-greater-than-or-equal';

    const DoubleLessThan = 'urn:oasis:names:tc:xacml:1.0:function:double-less-than';

    const DoubleLessThanOrEqual = 'urn:oasis:names:tc:xacml:1.0:function:double-less-than-or-equal';

    const DateTimeAddDayTimeDuration = 'urn:oasis:names:tc:xacml:3.0:function:dateTime-add-dayTimeDuration';

    const DateTimeAddYearMonthDuration = 'urn:oasis:names:tc:xacml:3.0:function:dateTime-add-yearMonthDuration';

    const DateTimeSubtractDayTimeDuration = 'urn:oasis:names:tc:xacml:3.0:function:dateTime-subtract-dayTimeDuration';

    const DateTimeSubtractYearMonthDuration = 'urn:oasis:names:tc:xacml:3.0:function:dateTime-subtract-yearMonthDuration';

    const DateAddYearMonthDuration = 'urn:oasis:names:tc:xacml:3.0:function:date-add-yearMonthDuration';

    const DateSubtractYearMonthDuration = 'urn:oasis:names:tc:xacml:3.0:function:date-subtract-yearMonthDuration';

    const StringGreaterThan = 'urn:oasis:names:tc:xacml:1.0:function:string-greater-than';

    const StringGreaterThanOrEqual = 'urn:oasis:names:tc:xacml:1.0:function:string-greater-than-or-equal';

    const StringLessThan = 'urn:oasis:names:tc:xacml:1.0:function:string-less-than';

    const StringLessThanOrEqual = 'urn:oasis:names:tc:xacml:1.0:function:string-less-than-or-equal';

    const TimeGreaterThan = 'urn:oasis:names:tc:xacml:1.0:function:time-greater-than';

    const TimeGreaterThanOrEqual = 'urn:oasis:names:tc:xacml:1.0:function:time-greater-than-or-equal';

    const TimeLessThan = 'urn:oasis:names:tc:xacml:1.0:function:time-less-than';

    const TimeLessThanOrEqual = 'urn:oasis:names:tc:xacml:1.0:function:time-less-than-or-equal';

    const TimeInRange = 'urn:oasis:names:tc:xacml:2.0:function:time-in-range';

    const DateTimeGreaterThan = 'urn:oasis:names:tc:xacml:1.0:function:dateTime-greater-than';

    const DateTimeGreaterThanOrEqual = 'urn:oasis:names:tc:xacml:1.0:function:dateTime-greater-than-or-equal';

    const DateTimeLessThan = 'urn:oasis:names:tc:xacml:1.0:function:dateTime-less-than';

    const DateTimeLessThanOrEqual = 'urn:oasis:names:tc:xacml:1.0:function:dateTime-less-than-or-equal';

    const DateGreaterThan = 'urn:oasis:names:tc:xacml:1.0:function:date-greater-than';

    const DateGreaterThanOrEqual = 'urn:oasis:names:tc:xacml:1.0:function:date-greater-than-or-equal';

    const DateLessThan = 'urn:oasis:names:tc:xacml:1.0:function:date-less-than';

    const DateLessThanOrEqual = 'urn:oasis:names:tc:xacml:1.0:function:date-less-than-or-equal';

    const StringOneAndOnly = 'urn:oasis:names:tc:xacml:1.0:function:string-one-and-only';

    const StringBagSize = 'urn:oasis:names:tc:xacml:1.0:function:string-bag-size';

    const StringIsIn = 'urn:oasis:names:tc:xacml:1.0:function:string-is-in';

    const StringBag = 'urn:oasis:names:tc:xacml:1.0:function:string-bag';

    const BooleanOneAndOnly = 'urn:oasis:names:tc:xacml:1.0:function:boolean-one-and-only';

    const BooleanBagSize = 'urn:oasis:names:tc:xacml:1.0:function:boolean-bag-size';

    const BooleanIsIn = 'urn:oasis:names:tc:xacml:1.0:function:boolean-is-in';

    const BooleanBag = 'urn:oasis:names:tc:xacml:1.0:function:boolean-bag';

    const IntegerOneAndOnly = 'urn:oasis:names:tc:xacml:1.0:function:integer-one-and-only';

    const IntegerBagSize = 'urn:oasis:names:tc:xacml:1.0:function:integer-bag-size';

    const IntegerIsIn = 'urn:oasis:names:tc:xacml:1.0:function:integer-is-in';

    const IntegerBag = 'urn:oasis:names:tc:xacml:1.0:function:integer-bag';

    const DoubleOneAndOnly = 'urn:oasis:names:tc:xacml:1.0:function:double-one-and-only';

    const DoubleBagSize = 'urn:oasis:names:tc:xacml:1.0:function:double-bag-size';

    const DoubleIsIn = 'urn:oasis:names:tc:xacml:1.0:function:double-is-in';

    const DoubleBag = 'urn:oasis:names:tc:xacml:1.0:function:double-bag';

    const TimeOneAndOnly = 'urn:oasis:names:tc:xacml:1.0:function:time-one-and-only';

    const TimeBagSize = 'urn:oasis:names:tc:xacml:1.0:function:time-bag-size';

    const TimeIsIn = 'urn:oasis:names:tc:xacml:1.0:function:time-is-in';

    const TimeBag = 'urn:oasis:names:tc:xacml:1.0:function:time-bag';

    const DateOneAndOnly = 'urn:oasis:names:tc:xacml:1.0:function:date-one-and-only';

    const DateBagSize = 'urn:oasis:names:tc:xacml:1.0:function:date-bag-size';

    const DateIsIn = 'urn:oasis:names:tc:xacml:1.0:function:date-is-in';

    const DateBag = 'urn:oasis:names:tc:xacml:1.0:function:date-bag';

    const DateTimeOneAndOnly = 'urn:oasis:names:tc:xacml:1.0:function:dateTime-one-and-only';

    const DateTimeBagSize = 'urn:oasis:names:tc:xacml:1.0:function:dateTime-bag-size';

    const DateTimeIsIn = 'urn:oasis:names:tc:xacml:1.0:function:dateTime-is-in';

    const DateTimeBag = 'urn:oasis:names:tc:xacml:1.0:function:dateTime-bag';

    const AnyURIOneAndOnly = 'urn:oasis:names:tc:xacml:1.0:function:anyURI-one-and-only';

    const AnyURIBagSize = 'urn:oasis:names:tc:xacml:1.0:function:anyURI-bag-size';

    const AnyURIIsIn = 'urn:oasis:names:tc:xacml:1.0:function:anyURI-is-in';

    const AnyURIBag = 'urn:oasis:names:tc:xacml:1.0:function:anyURI-bag';

    const HexBinaryOneAndOnly = 'urn:oasis:names:tc:xacml:1.0:function:hexBinary-one-and-only';

    const HexBinaryBagSize = 'urn:oasis:names:tc:xacml:1.0:function:hexBinary-bag-size';

    const HexBinaryIsIn = 'urn:oasis:names:tc:xacml:1.0:function:hexBinary-is-in';

    const HexBinaryBag = 'urn:oasis:names:tc:xacml:1.0:function:hexBinary-bag';

    const Base64BinaryOneAndOnly = 'urn:oasis:names:tc:xacml:1.0:function:base64Binary-one-and-only';

    const Base64BinaryBagSize = 'urn:oasis:names:tc:xacml:1.0:function:base64Binary-bag-size';

    const Base64BinaryIsIn = 'urn:oasis:names:tc:xacml:1.0:function:base64Binary-is-in';

    const Base64BinaryBag = 'urn:oasis:names:tc:xacml:1.0:function:base64Binary-bag';

    const DayTimeDurationOneAndOnly = 'urn:oasis:names:tc:xacml:3.0:function:dayTimeDuration-one-and-only';

    const DayTimeDurationBagSize = 'urn:oasis:names:tc:xacml:3.0:function:dayTimeDuration-bag-size';

    const DayTimeDurationIsIn = 'urn:oasis:names:tc:xacml:3.0:function:dayTimeDuration-is-in';

    const DayTimeDurationBag = 'urn:oasis:names:tc:xacml:3.0:function:dayTimeDuration-bag';

    const YearMonthDurationOneAndOnly = 'urn:oasis:names:tc:xacml:3.0:function:yearMonthDuration-one-and-only';

    const YearMonthDurationBagSize = 'urn:oasis:names:tc:xacml:3.0:function:yearMonthDuration-bag-size';

    const YearMonthDurationIsIn = 'urn:oasis:names:tc:xacml:3.0:function:yearMonthDuration-is-in';

    const YearMonthDurationBag = 'urn:oasis:names:tc:xacml:3.0:function:yearMonthDuration-bag';

    const X500NameOneAndOnly = 'urn:oasis:names:tc:xacml:1.0:function:x500Name-one-and-only';

    const X500NameBagSize = 'urn:oasis:names:tc:xacml:1.0:function:x500Name-bag-size';

    const X500NameIsIn = 'urn:oasis:names:tc:xacml:1.0:function:x500Name-is-in';

    const X500NameBag = 'urn:oasis:names:tc:xacml:1.0:function:x500Name-bag';

    const Rfc822NameOneAndOnly = 'urn:oasis:names:tc:xacml:1.0:function:rfc822Name-one-and-only';

    const Rfc822NameBagSize = 'urn:oasis:names:tc:xacml:1.0:function:rfc822Name-bag-size';

    const Rfc822NameIsIn = 'urn:oasis:names:tc:xacml:1.0:function:rfc822Name-is-in';

    const Rfc822NameBag = 'urn:oasis:names:tc:xacml:1.0:function:rfc822Name-bag';

    const IpAddressOneAndOnly = 'urn:oasis:names:tc:xacml:2.0:function:ipAddress-one-and-only';

    const IpAddressBagSize = 'urn:oasis:names:tc:xacml:2.0:function:ipAddress-bag-size';

    const IpAddressBag = 'urn:oasis:names:tc:xacml:2.0:function:ipAddress-bag';

    const DnsNameOneAndOnly = 'urn:oasis:names:tc:xacml:2.0:function:dnsName-one-and-only';

    const DnsNameBagSize = 'urn:oasis:names:tc:xacml:2.0:function:dnsName-bag-size';

    const DnsNameBag = 'urn:oasis:names:tc:xacml:2.0:function:dnsName-bag';

    const StringConcatenate = 'urn:oasis:names:tc:xacml:2.0:function:string-concatenate';

    const BooleanFromString = 'urn:oasis:names:tc:xacml:3.0:function:boolean-from-string';

    const StringFromBoolean = 'urn:oasis:names:tc:xacml:3.0:function:string-from-boolean';

    const IntegerFromString = 'urn:oasis:names:tc:xacml:3.0:function:integer-from-string';

    const StringFromInteger = 'urn:oasis:names:tc:xacml:3.0:function:string-from-integer';

    const DoubleFromString = 'urn:oasis:names:tc:xacml:3.0:function:double-from-string';

    const StringFromDouble = 'urn:oasis:names:tc:xacml:3.0:function:string-from-double';

    const TimeFromString = 'urn:oasis:names:tc:xacml:3.0:function:time-from-string';

    const StringFromTime = 'urn:oasis:names:tc:xacml:3.0:function:string-from-time';

    const DateFromString = 'urn:oasis:names:tc:xacml:3.0:function:date-from-string';

    const StringFromDate = 'urn:oasis:names:tc:xacml:3.0:function:string-from-date';

    const DateTimeFromString = 'urn:oasis:names:tc:xacml:3.0:function:dateTime-from-string';

    const StringFromDateTime = 'urn:oasis:names:tc:xacml:3.0:function:string-from-dateTime';

    const AnyURIFromString = 'urn:oasis:names:tc:xacml:3.0:function:anyURI-from-string';

    const StringFromAnyURI = 'urn:oasis:names:tc:xacml:3.0:function:string-from-anyURI';

    const DayTimeDurationFromString = 'urn:oasis:names:tc:xacml:3.0:function:dayTimeDuration-from-string';

    const StringFromDayTimeDuration = 'urn:oasis:names:tc:xacml:3.0:function:string-from-dayTimeDuration';

    const YearMonthDurationFromString = 'urn:oasis:names:tc:xacml:3.0:function:yearMonthDuration-from-string';

    const StringFromYearMonthDuration = 'urn:oasis:names:tc:xacml:3.0:function:string-from-yearMonthDuration';

    const X500NameFromString = 'urn:oasis:names:tc:xacml:3.0:function:x500Name-from-string';

    const StringFromX500Name = 'urn:oasis:names:tc:xacml:3.0:function:string-from-x500Name';

    const Rfc822NameFromString = 'urn:oasis:names:tc:xacml:3.0:function:rfc822Name-from-string';

    const StringFromRfc822Name = 'urn:oasis:names:tc:xacml:3.0:function:string-from-rfc822Name';

    const IpAddressFromString = 'urn:oasis:names:tc:xacml:3.0:function:ipAddress-from-string';

    const StringFromIpAddress = 'urn:oasis:names:tc:xacml:3.0:function:string-from-ipAddress';

    const DnsNameFromString = 'urn:oasis:names:tc:xacml:3.0:function:dnsName-from-string';

    const StringFromDnsName = 'urn:oasis:names:tc:xacml:3.0:function:string-from-dnsName';

    const StringStartsWith = 'urn:oasis:names:tc:xacml:3.0:function:string-starts-with';

    const AnyURIStartsWith = 'urn:oasis:names:tc:xacml:3.0:function:anyURI-starts-with';

    const StringEndsWith = 'urn:oasis:names:tc:xacml:3.0:function:string-ends-with';

    const AnyURIEndsWith = 'urn:oasis:names:tc:xacml:3.0:function:anyURI-ends-with';

    const StringContains = 'urn:oasis:names:tc:xacml:3.0:function:string-contains';

    const AnyURIContains = 'urn:oasis:names:tc:xacml:3.0:function:anyURI-contains';

    const StringSubstring = 'urn:oasis:names:tc:xacml:3.0:function:string-substring';

    const AnyURISubstring = 'urn:oasis:names:tc:xacml:3.0:function:anyURI-substring';

    const AnyOf = 'urn:oasis:names:tc:xacml:3.0:function:any-of';

    const AllOf = 'urn:oasis:names:tc:xacml:3.0:function:all-of';

    const AnyOfAny = 'urn:oasis:names:tc:xacml:3.0:function:any-of-any';

    const AllOfAny = 'urn:oasis:names:tc:xacml:1.0:function:all-of-any';

    const AnyOfAll = 'urn:oasis:names:tc:xacml:1.0:function:any-of-all';

    const AllOfAll = 'urn:oasis:names:tc:xacml:1.0:function:all-of-all';

    const Map = 'urn:oasis:names:tc:xacml:3.0:function:map';

    const X500NameMatch = 'urn:oasis:names:tc:xacml:1.0:function:x500Name-match';

    const Rfc822NameMatch = 'urn:oasis:names:tc:xacml:1.0:function:rfc822Name-match';

    const StringRegexpMatch = 'urn:oasis:names:tc:xacml:1.0:function:string-regexp-match';

    const AnyURIRegexpMatch = 'urn:oasis:names:tc:xacml:2.0:function:anyURI-regexp-match';

    const IpAddressRegexpMatch = 'urn:oasis:names:tc:xacml:2.0:function:ipAddress-regexp-match';

    const DnsNameRegexpMatch = 'urn:oasis:names:tc:xacml:2.0:function:dnsName-regexp-match';

    const Rfc822NameRegexpMatch = 'urn:oasis:names:tc:xacml:2.0:function:rfc822Name-regexp-match';

    const X500NameRegexpMatch = 'urn:oasis:names:tc:xacml:2.0:function:x500Name-regexp-match';

    const XpathNodeCount = 'urn:oasis:names:tc:xacml:3.0:function:xpath-node-count';

    const XpathNodeEqual = 'urn:oasis:names:tc:xacml:3.0:function:xpath-node-equal';

    const XpathNodeMatch = 'urn:oasis:names:tc:xacml:3.0:function:xpath-node-match';

    const StringIntersection = 'urn:oasis:names:tc:xacml:1.0:function:string-intersection';

    const StringAtLeastOneMemberOf = 'urn:oasis:names:tc:xacml:1.0:function:string-at-least-one-member-of';

    const StringUnion = 'urn:oasis:names:tc:xacml:1.0:function:string-union';

    const StringSubset = 'urn:oasis:names:tc:xacml:1.0:function:string-subset';

    const StringSetEquals = 'urn:oasis:names:tc:xacml:1.0:function:string-set-equals';

    const BooleanIntersection = 'urn:oasis:names:tc:xacml:1.0:function:boolean-intersection';

    const BooleanAtLeastOneMemberOf = 'urn:oasis:names:tc:xacml:1.0:function:boolean-at-least-one-member-of';

    const BooleanUnion = 'urn:oasis:names:tc:xacml:1.0:function:boolean-union';

    const BooleanSubset = 'urn:oasis:names:tc:xacml:1.0:function:boolean-subset';

    const BooleanSetEquals = 'urn:oasis:names:tc:xacml:1.0:function:boolean-set-equals';

    const IntegerIntersection = 'urn:oasis:names:tc:xacml:1.0:function:integer-intersection';

    const IntegerAtLeastOneMemberOf = 'urn:oasis:names:tc:xacml:1.0:function:integer-at-least-one-member-of';

    const IntegerUnion = 'urn:oasis:names:tc:xacml:1.0:function:integer-union';

    const IntegerSubset = 'urn:oasis:names:tc:xacml:1.0:function:integer-subset';

    const IntegerSetEquals = 'urn:oasis:names:tc:xacml:1.0:function:integer-set-equals';

    const DoubleIntersection = 'urn:oasis:names:tc:xacml:1.0:function:double-intersection';

    const DoubleAtLeastOneMemberOf = 'urn:oasis:names:tc:xacml:1.0:function:double-at-least-one-member-of';

    const DoubleUnion = 'urn:oasis:names:tc:xacml:1.0:function:double-union';

    const DoubleSubset = 'urn:oasis:names:tc:xacml:1.0:function:double-subset';

    const DoubleSetEquals = 'urn:oasis:names:tc:xacml:1.0:function:double-set-equals';

    const TimeIntersection = 'urn:oasis:names:tc:xacml:1.0:function:time-intersection';

    const TimeAtLeastOneMemberOf = 'urn:oasis:names:tc:xacml:1.0:function:time-at-least-one-member-of';

    const TimeUnion = 'urn:oasis:names:tc:xacml:1.0:function:time-union';

    const TimeSubset = 'urn:oasis:names:tc:xacml:1.0:function:time-subset';

    const TimeSetEquals = 'urn:oasis:names:tc:xacml:1.0:function:time-set-equals';

    const DateIntersection = 'urn:oasis:names:tc:xacml:1.0:function:date-intersection';

    const DateAtLeastOneMemberOf = 'urn:oasis:names:tc:xacml:1.0:function:date-at-least-one-member-of';

    const DateUnion = 'urn:oasis:names:tc:xacml:1.0:function:date-union';

    const DateSubset = 'urn:oasis:names:tc:xacml:1.0:function:date-subset';

    const DateSetEquals = 'urn:oasis:names:tc:xacml:1.0:function:date-set-equals';

    const DateTimeIntersection = 'urn:oasis:names:tc:xacml:1.0:function:dateTime-intersection';

    const DateTimeAtLeastOneMemberOf = 'urn:oasis:names:tc:xacml:1.0:function:dateTime-at-least-one-member-of';

    const DateTimeUnion = 'urn:oasis:names:tc:xacml:1.0:function:dateTime-union';

    const DateTimeSubset = 'urn:oasis:names:tc:xacml:1.0:function:dateTime-subset';

    const DateTimeSetEquals = 'urn:oasis:names:tc:xacml:1.0:function:dateTime-set-equals';

    const AnyURIIntersection = 'urn:oasis:names:tc:xacml:1.0:function:anyURI-intersection';

    const AnyURIAtLeastOneMemberOf = 'urn:oasis:names:tc:xacml:1.0:function:anyURI-at-least-one-member-of';

    const AnyURIUnion = 'urn:oasis:names:tc:xacml:1.0:function:anyURI-union';

    const AnyURISubset = 'urn:oasis:names:tc:xacml:1.0:function:anyURI-subset';

    const AnyURISetEquals = 'urn:oasis:names:tc:xacml:1.0:function:anyURI-set-equals';

    const HexBinaryIntersection = 'urn:oasis:names:tc:xacml:1.0:function:hexBinary-intersection';

    const HexBinaryAtLeastOneMemberOf = 'urn:oasis:names:tc:xacml:1.0:function:hexBinary-at-least-one-member-of';

    const HexBinaryUnion = 'urn:oasis:names:tc:xacml:1.0:function:hexBinary-union';

    const HexBinarySubset = 'urn:oasis:names:tc:xacml:1.0:function:hexBinary-subset';

    const HexBinarySetEquals = 'urn:oasis:names:tc:xacml:1.0:function:hexBinary-set-equals';

    const Base64BinaryIntersection = 'urn:oasis:names:tc:xacml:1.0:function:base64Binary-intersection';

    const Base64BinaryAtLeastOneMemberF = 'urn:oasis:names:tc:xacml:1.0:function:base64Binary-at-least-one-member-f';

    const Base64BinaryUnion = 'urn:oasis:names:tc:xacml:1.0:function:base64Binary-union';

    const Base64BinarySubset = 'urn:oasis:names:tc:xacml:1.0:function:base64Binary-subset';

    const Base64BinarySetEquals = 'urn:oasis:names:tc:xacml:1.0:function:base64Binary-set-equals';

    const DayTimeDurationIntersection = 'urn:oasis:names:tc:xacml:3.0:function:dayTimeDuration-intersection';

    const DayTimeDurationAtLeastOneEmberOf = 'urn:oasis:names:tc:xacml:3.0:function:dayTimeDuration-at-least-one-ember-of';

    const DayTimeDurationUnion = 'urn:oasis:names:tc:xacml:3.0:function:dayTimeDuration-union';

    const DayTimeDurationSubset = 'urn:oasis:names:tc:xacml:3.0:function:dayTimeDuration-subset';

    const DayTimeDurationSetEquals = 'urn:oasis:names:tc:xacml:3.0:function:dayTimeDuration-set-equals';

    const YearMonthDurationIntersection = 'urn:oasis:names:tc:xacml:3.0:function:yearMonthDuration-intersection';

    const YearMonthDurationAtLeastOneEmberOf = 'urn:oasis:names:tc:xacml:3.0:function:yearMonthDuration-at-least-one-ember-of';

    const YearMonthDurationUnion = 'urn:oasis:names:tc:xacml:3.0:function:yearMonthDuration-union';

    const YearMonthDurationSubset = 'urn:oasis:names:tc:xacml:3.0:function:yearMonthDuration-subset';

    const YearMonthDurationSetEquals = 'urn:oasis:names:tc:xacml:3.0:function:yearMonthDuration-set-equals';

    const X500NameIntersection = 'urn:oasis:names:tc:xacml:1.0:function:x500Name-intersection';

    const X500NameAtLeastOneMemberOf = 'urn:oasis:names:tc:xacml:1.0:function:x500Name-at-least-one-member-of';

    const X500NameUnion = 'urn:oasis:names:tc:xacml:1.0:function:x500Name-union';

    const X500NameSubset = 'urn:oasis:names:tc:xacml:1.0:function:x500Name-subset';

    const X500NameSetEquals = 'urn:oasis:names:tc:xacml:1.0:function:x500Name-set-equals';

    const Rfc822NameIntersection = 'urn:oasis:names:tc:xacml:1.0:function:rfc822Name-intersection';

    const Rfc822NameAtLeastOneMemberOf = 'urn:oasis:names:tc:xacml:1.0:function:rfc822Name-at-least-one-member-of';

    const Rfc822NameUnion = 'urn:oasis:names:tc:xacml:1.0:function:rfc822Name-union';

    const Rfc822NameSubset = 'urn:oasis:names:tc:xacml:1.0:function:rfc822Name-subset';

    const Rfc822NameSetEquals = 'urn:oasis:names:tc:xacml:1.0:function:rfc822Name-set-equals';

    const AccessPermitted = 'urn:oasis:names:tc:xacml:3.0:function:access-permitted';
}