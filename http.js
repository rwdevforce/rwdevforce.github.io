var test;
    $.ajax({
        url: "https://raw.githubusercontent.com/74647/Proxify/main/proxies/http.txt",
        dataType: "text",
        async: true,
        success: function(msg){
            test = msg;
            alert('Содержимое файла: '+test);
        }
    });
