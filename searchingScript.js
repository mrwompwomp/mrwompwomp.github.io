// Computes the Jaro distance between two string By Adam Phillabaum, Chris Umbel
function distance(s1, s2) {
    if (typeof (s1) !== "string" || typeof (s2) !== "string") {
        return 0;
    }

    if (s1.length === 0 || s2.length === 0) {
        return 0;
    }

    var matchWindow = (Math.floor(Math.max(s1.length, s2.length) / 2.0)) - 1;
    var matches1 = new Array(s1.length);
    var matches2 = new Array(s2.length);
    var m = 0;
    var t = 0;
    var i = 0;
    var k = 0;
    for (i = 0; i < s1.length; i++) {
        var start = Math.max(0, (i - matchWindow));
        var end = Math.min((i + matchWindow + 1), s2.length);

        for (k = start; k < end; k++) {
            if (matches2[k]) {
                continue;
            }
            if (s1[i] !== s2[k]) {
                continue;
            }
            matches1[i] = true;
            matches2[k] = true;
            m++;
            break;
        }
    }
    if (m === 0) {
        return 0.0;
    }
    k = 0;
    for (i = 0; i < s1.length; i++) {
        if (!matches1[i]) {
            continue;
        }
        while (!matches2[k]) {
            k++;
        }
        if (s1[i] !== s2[k]) {
            t++;
        }
        k++;
    }
    t = t / 2.0;

    return ((m / s1.length) + (m / s2.length) + ((m - t) / m)) / 3.0;
}

function JaroWinklerDistance(s1, s2, dj, ignoreCase) {
    if (s1 === s2) {
        return 1;
    } else {
        if (ignoreCase) {
            s1 = s1.toLowerCase();
            s2 = s2.toLowerCase();
        }
        var jaro = (typeof (dj) === 'undefined') ? distance(s1, s2) : dj;
        var p = 0.1;
        var l = 0
        while (s1[l] === s2[l] && l < 4) {
            l++;
        }
        return jaro + l * p * (1 - jaro);
    }
}

function searchfunc() {
    var strng = document.getElementById("navBarSearchForm").value;
    var pages = ['about', 'cart', 'products', 'Ti-Connect CE', 'Ti-Connect', 'Ti-Launchpad', 'Tools & Software', 'Ti-73 explorer', 'Ti-83 plus', 'Ti-nspire CX', 'Ti-nspire CX CAS', 'Ti-89 Titanium', 'Ti-84 plus', 'Ti-84 plus CE'];
    var jaroWdists = [];
    for (var i = 0; i < pages.length; i++) {
        jaroWdists.push(JaroWinklerDistance(strng, pages[i], undefined, true));
    }
    var j = jaroWdists.indexOf(Math.max.apply(null, jaroWdists));

    var refs = ['about.html', 'cart.html', 'Products.html', 'Ti-Connect_CE.html', 'Ti-Connect.html', 'Ti-launchpad.html', 'Tools_Software.html', 'TI.html#Ti-73 explorer', 'TI.html#Ti-83 plus', 'TI.html#Ti-nspire CX', 'TI.html#Ti-nspire CX CAS', 'TI.html#Ti-89 Titanium', 'TI.html#Ti-84 plus', 'TI.html#Ti-84 plus CE'];
    window.location = refs[j];
    if (!(window.location.pathname.substr(window.location.pathname.length - 7) == refs[j].substr(0, 7))) {
        window.alert();
    }
}
