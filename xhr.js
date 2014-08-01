function ajaxRequest()
{
try
{
    // fon NON-IE browsers
    var request = new XMLHttpRequest()
}
catch(e1)
{
    try
    {
        //for IE6+ browser
        var request = new ActiveXObject("Msxml2.XMLHTTP")
    }
    catch(e2)
    {
        try
        {
            //for IE5
            var request = new ActiveXObject("Microsoft.XMLHTTP")
        }
        catch(e3)
        {
            //No AJAX support 
            var request = false
        }
    }
}
return request
}