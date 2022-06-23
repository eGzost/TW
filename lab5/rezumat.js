var a;
function arata_ascunde()
{
    if(a==1)
    {
        document.getElementById("imagine").style.display="inline";
        return a=0;
    }

    else
    {
        document.getElementById("imagine").style.display="none";
        return a=1;
    }
}