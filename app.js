var month = [
  "JAN",
  "FEB",
  "MAR",
  "APR",
  "MAY",
  "JUN",
  "JUL",
  "AUG",
  "SEP",
  "OCT",
  "NOV",
  "DEC",
];
var d = document.querySelector("#d");
var m = document.querySelector("#m");
var y = document.querySelector("#y");
const date = new Date();
d.options.add(new Option("DD", "DD"));
for (let i = 1; i <= 31; i++) {
  d.options.add(new Option(i, i));
}
m.options.add(new Option("MM", "MM"));
for (let i = 1; i <= 12; i++) {
  m.options.add(new Option(month[i - 1], i));
}
y.options.add(new Option("YYYY", "YYYY"));
for (let i = date.getFullYear() - 100; i <= date.getFullYear() - 18; i++) {
  y.options.add(new Option(i, i));
}
