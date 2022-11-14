let valid = false;
function IDchecker(username, password)
{
    var validReg = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if (username.value.match(validReg) && password.value != "")
    {
        valid = true;
    }

    else 
    {
        valid = false;
        alert("username must be in the form 'name@domain.com', and password cannot be empty!");
    }
    
}

function quantityChecker(ship, quantity1, quantity2, quantity3)
{
    let shipmethod = document.querySelector('input[name="ship"]:checked');

    if (shipmethod.value == none)
    {
        valid = false;
        alert("Please select which shipment method you would prefer");
    }

    if (quantity1.value == "" | quantity2.value == "" | quantity3.value == "")
    {
        valid = false;
        alert("Please input a quantity");
    }

    else
    {
        valid = true;
    }
    
}

function isValid()
{
    var f = document.getElementById("login");
    f.setAttribute('method', "POST");

    if(valid == true)
    {
        f.setAttribute('action',"customerBackend.php");
    }

    else
    {
        f.setAttribute('action',"#");
    }
}

    
