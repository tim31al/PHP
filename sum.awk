##^(0|[1-9]\d*)(\.\d+)?
{
 if (!(x ~ /^-?(0|[1-9][0-9]*)(\.[0-9]+)?/)) {
   print x " не число"
 } else if (!(y ~ /^-?(0|[1-9][0-9]*)(\.[0-9]+)?/)) {
   print y " не число"
 } else {
   sum=x+y
   print "Сумма " x "+" y " = " sum
 }
}
