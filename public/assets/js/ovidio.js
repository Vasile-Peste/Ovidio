// Work in progress.
/* (function (w, d, undefined) {
    function appendCode () {
        var headerLeftStreamText = d.getElementById("header-left-stream-text");
        var codeSnippets = d.querySelectorAll(".post pre code");
        var codes = [];

        for (let i = 0; i < codeSnippets.length; ++i) {
            codes.push(codeSnippets[i]);
        }

        codes = codes.sort(function (a, b) {
            return a.innerText.length < b.innerText.length;
        });

        for (let i = 0; i < codes.length; ++i) {
            var codeSnippet = codeSnippets[i];
            var codeContent = codeSnippet.innerText;
            var code = "";

            if (codeContent.length <= 750 && codeContent.length >= 670) {
                code = codeContent;
            }

            if (codeContent.length > 750) {
                code = codeContent.substr(0, 740) + "\n" + "// CORRUPTED CODE!";
            }

            if (codeContent.length < 750) {
                code = codeContent;
            }
        }
    }

    window.addEventListener("DOMContentLoaded", appendCode);
})(window, window.document);*/