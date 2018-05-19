        var xhr = new XMLHttpRequest();
        xhr.onload = function () {

            if (xhr.status == 200) {
                response = xhr.responseXML;
                var names = response.getElementsByTagName("name");
                var images = response.getElementsByTagName("image");
                var contents = response.getElementsByTagName("content");
                for (var i = 0; i < names.length; i++) {
                    var td = document.createElement("tr");
                    var im = document.createElement("img");
                    var head = document.createElement("h3");
                    head.innerHTML = names[i].innerHTML;
                    head.style.textAlign = "center";
                    im.setAttribute("src", images[i].innerHTML);
                    im.setAttribute("alt", names[i].textContent);
                    im.style.float = "right";
                    var p = document.createElement("p");
                    p.innerHTML = contents[i].innerHTML;
                    td.appendChild(head);
                    td.appendChild(im);
                    td.appendChild(p);
                    document.getElementsByTagName("table")[0].appendChild(td);
                }
            }
        }
        xhr.open('GET', 'tools.xml', true);
        xhr.send(null);
