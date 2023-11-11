function returnDate(a, b, c) {
    var d, e = new Date;
    void 0 != c && "" != c && "undefined" != c && (e = c);
    var f = e.getFullYear(),
        g = e.getMonth(),
        h = e.getDate(),
        i = e.getDay(),
        j = e.getHours(),
        k = new Array("الأحد", "الإثنين", "الثلاثاء", "الأربعاء", "الخميس", "الجمعة", "السبت"),
        l = new Array("يناير", "فبراير", "مارس", "أبريل", "مايو", "يونيو", "يوليو", "أغسطس", "سبتمبر", "أكتوبر", "نوفمبر", "ديسمبر");
    return d = "timeofday" == a ? j < 12 ? "morning" : j < 17 ? "afternoon" : "evening" : "dayofweek" == a ? k[i] : "day" == a ? h : "month" == a ? l[g] : "year" == a ? f : l[g] + " " + h + ", " + f, b ? void document.write(d) : d
}