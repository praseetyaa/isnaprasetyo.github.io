function activateDarkMode(){
    var script = document.createElement('script');
    script.src = "https://praseetyaa.github.io/portfolio/assets/cms/dark-mode.js";
    script.type = "module";
    document.getElementsByTagName('head')[1].appendChild(script);

    var link_a = document.createElement('link');
    link_a.href = "https://praseetyaa.github.io/portfolio/assets/cms/light.css";
    link_a.type = "text/css";
    link_a.rel = "stylesheet";
    link_a.media = "(prefers-color-scheme: light)";
    document.getElementsByTagName('head')[1].appendChild(link_a);

    var link_b = document.createElement('link');
    link_b.href = "https://praseetyaa.github.io/portfolio/assets/cms/dark.css";
    link_b.type = "text/css";
    link_b.rel = "stylesheet";
    link_b.media = "(prefers-color-scheme: dark)";
    document.getElementsByTagName('head')[1].appendChild(link_b);
}