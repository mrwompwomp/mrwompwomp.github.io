        var xhr = new XMLHttpRequest();
        xhr.onload = function () {

            if (xhr.status == 200) {
                response = JSON.parse(xhr.responseText);
                for (var i = 0; i < response.calculator.length; i++) {
                    var name = decodeURIComponent(window.location.href).split("#")[1];
                    if (name == response.calculator[i].calc.name) {
                        document.getElementsByTagName("title")[0].textContent = name;
                        document.getElementById("specificationSection").innerHTML = response.calculator[i].calc.specifications;
                        document.getElementById("overviewP").innerHTML = response.calculator[i].calc.overview;
                        document.getElementById("calcimg").setAttribute("src", "Images/" + response.calculator[i].calc.image);
                        document.getElementById("calcimg").setAttribute("alt", name);
                        document.getElementById("pageTitle").textContent = name;
                    document.getElementById("addCart").innerHTML = "<div class='simpleCart_shelfItem'><p>Quantity: <input type='number' min='1' value='1' class='item_Quantity'><br><span class='item_price'>$" + response.calculator[i].calc.price + "</span><br><a class='item_add' href='javascript:;'> <span class='glyphicon glyphicon-shopping-cart'></span> Add to Cart </a></p></div></td></tr>";
                    
                    
                    }
                }
            }
        }
        xhr.open('GET', 'calcdata1.json', true);
        xhr.send(null);
