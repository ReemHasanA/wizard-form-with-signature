
var signaturePad = $('#signaturePad').signature({syncField: '#signatureJSON', syncFormat: 'JSON'});
$('#clear').click(function(e) {
    e.preventDefault();
    signaturePad.signature('clear');
    $("#signatureJSON").val('');
});

$(document).ready(function() {
    $('.with-search').select2({
        width: 'resolve' // need to override the changed default
    });

    if ($('#signatureJSON').val()) {
        $('#signaturePad').signature('enable')
            .signature('draw', $('#signatureJSON').val());
    }
});

var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";

    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Save";
    } else {
        document.getElementById("nextBtn").innerHTML = "Next";
    }
    fixStepIndicator(n)
}

function next(n) {
    var x = document.getElementsByClassName("tab");
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form...
    if (currentTab >= x.length) {
        // ... the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
}

function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
        x[i].classList.remove("active");
    }
    //... and adds the "active" class on the current step:
    x[n].classList.add("active");
}
