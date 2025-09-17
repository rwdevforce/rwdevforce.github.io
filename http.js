var http;
    $.ajax({
        url: "https://raw.githubusercontent.com/74647/Proxify/main/proxies/http.txt",
        dataType: "http",
        async: true,
        success: function(msg){
            test = msg;
            alert('HTTP: '+http);
        }
    });

var https:
    $.ajax({
        url: "https://raw.githubusercontent.com/74647/Proxify/main/proxies/https.txt",
        dataType: "https",
        async: true,
        success: function(msg){
            test = msg;
            alert('HTTPS: '+https);
        }
    });

var socks4:
    $.ajax({
        url: "https://raw.githubusercontent.com/74647/Proxify/main/proxies/socks4.txt",
        dataType: "socks4",
        async: true,
        success: function(msg){
            test = msg;
            alert('SOCKS4: '+socks4);
        }
    });

var socks5;
    $.ajax({
        url: "https://raw.githubusercontent.com/74647/Proxify/main/proxies/socks5.txt",
        dataType: "socks5",
        async: true,
        success: function(msg){
            test = msg;
            alert('SOCKS5: '+socks5);
        }
    });

