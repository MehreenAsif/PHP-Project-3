//Only one radio button can be selected at any point in time. The radio button options do
//not affect the application if the user is not a runner.

function checkradiobutton() {

    if (!document.getElementById("Runner").checked)
    {
        document.getElementById("run1").disabled = true;
        document.getElementById("run2").disabled = true;
        document.getElementById("run3").disabled = true;
        document.getElementById("run1").checked = false;
        document.getElementById("run2").checked = false;
        document.getElementById("run3").checked = false;
    } else
    {
        document.getElementById("run1").disabled = false;
        document.getElementById("run2").disabled = false;
        document.getElementById("run3").disabled = false;
    }
}
;