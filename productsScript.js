        var xhr = new XMLHttpRequest();
        xhr.onload = function () {

            if (xhr.status == 200) {
                response = JSON.parse(xhr.responseText);
                var outputs = "<table>";
                for (var i = 0; i < response.calculator.length; i++) {
                    var name = response.calculator[i].calc.name;
                    outputs = outputs + "<tr><td><a href='TI.html#" + name + "'><img src='Images/" + response.calculator[i].calc.image + "' alt='" + name + "' style='min-width:150px;margin-top:20px;'></a></td>";
                    outputs = outputs + "<td>" + "<div class='simpleCart_shelfItem'><h2 class='item_name' style='text-align:center;vertical-align:top;'>" + name + "</h2><p>" + response.calculator[i].calc.summary + "</p><p>Quantity: <input type='number' min='1' value='1' class='item_Quantity'><br><span class='item_price'>$" + response.calculator[i].calc.price + "</span><br><a class='item_add' href='javascript:;'> <span class='glyphicon glyphicon-shopping-cart'></span> Add to Cart </a></p></div></td></tr>";
                }
                document.getElementById("infoTable").innerHTML = outputs;
            }
        }
        xhr.open('GET', 'calcdata1.json', true);
        xhr.send(null);
        document.getElementById("navprody").onclick = test;

        function test() {
            var x = document.getElementById('navprods');
            if (x.style.display === 'none') {
                x.style.display = 'block';
            } else {
                x.style.display = 'none';
            }


        }
        document.getElementById("softnav").onclick = test2;

        function test2() {
            var x = document.getElementById('navsofts');
            if (x.style.display === 'none') {
                x.style.display = 'block';
            } else {
                x.style.display = 'none';
            }


        }
