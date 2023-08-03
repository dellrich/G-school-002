// ----------------------------------------------
// ---------label flottant js gbor addCat--------
//-----------------------------------------------

$(() => {
    verification();

    if ($("#nom_uni").length) {
        adduni();
    }

    if ($("#nom_eco").length) {
        addeco();
    }

    validate();
});

/**
 *
 * function add table input check
 *
 */
//  gest heht

function adduni() {
    let input_nomUni = document.getElementById("nom_uni");

    input_nomUni.addEventListener("keyup", () => {
        input_nomUni.setAttribute("value", input_nomUni.value);
    });

    let input_sigle = document.getElementById("sigle_uni");

    input_sigle.addEventListener("keyup", () => {
        input_sigle.setAttribute("value", input_sigle.value);
    });
}

function verification() {
    $("input[type='text']").keyup(function () {
        if ($(this).val() == "") {
            $(this).attr("value", this.value);
        } else {
            $(this).attr("value", this.value);
        }
    });

    $('input[type="date"]').change(function () {
        var inputDate = new Date(this.value);
        $(this).attr("value", inputDate);
    });
}

function addeco() {
    let input_nomeco = document.getElementById("nom_eco");

    input_nomeco.addEventListener("keyup", () => {
        input_nomeco.setAttribute("value", input_nomeco.value);
    });

    let input_sigleeco = document.getElementById("sigle_eco");

    input_sigleeco.addEventListener("keyup", () => {
        input_sigleeco.setAttribute("value", input_sigleeco.value);
    });

    let input_adreco = document.getElementById("adr_eco");

    input_adreco.addEventListener("keyup", () => {
        input_adreco.setAttribute("value", input_adreco.value);
    });

    let input_teleco = document.getElementById("tel_eco");

    input_teleco.addEventListener("keyup", () => {
        input_teleco.setAttribute("value", input_teleco.value);
    });

    let input_webeco = document.getElementById("web_eco");

    input_webeco.addEventListener("keyup", () => {
        input_webeco.setAttribute("value", input_webeco.value);
    });

    let input_maileco = document.getElementById("mail_eco");

    input_maileco.addEventListener("keyup", () => {
        input_maileco.setAttribute("value", input_maileco.value);
    });

    let input_directeureco = document.getElementById("directeur_eco");

    input_directeureco.addEventListener("keyup", () => {
        input_directeureco.setAttribute("value", input_directeureco.value);
    });

    let input_directeuradjeco = document.getElementById("directeur_adj_eco");

    input_directeuradjeco.addEventListener("keyup", () => {
        input_directeuradjeco.setAttribute(
            "value",
            input_directeuradjeco.value
        );
    });
}

function validate() {
    $("#cataddbtn").on("click", function (event) {
        var input = document.querySelectorAll(".isvalide");

        var small_input = document.querySelectorAll(".isvalides");

        var big_input = document.querySelectorAll(".bigvalide");

        // console.log(input);
        input.forEach((element) => {
            // console.log(element.value);
            let elem = element.value.trim().length;
            console.log(elem);
            if (elem > 2) {
                // alert('Veuillez bien renseigner les champs');
                element.style.border = "solid 1px green";
            } else {
                element.style.border = "solid 1px red";

                event.preventDefault();
                event.stopPropagation();
                // console.log(event );
            }
            //console.log(elem);
        });

        small_input.forEach((elmt) => {
            // console.log(element.value);
            let elem2 = elmt.value.trim().length;
            if (elem2 >= 1 && elmt.value > 0) {
                // alert('Veuillez bien renseigner les champs');
                elmt.style.border = "solid 1px green";
            } else {
                elmt.style.border = "solid 1px red";

                event.preventDefault();
                event.stopPropagation();
                // console.log(event );
            }
            console.log(elem2);
        });

        big_input.forEach((bigelmt) => {
            // console.log(element.value);
            let elem3 = bigelmt.value.trim().length;
            if (elem3 > 20) {
                // alert('Veuillez bien renseigner les champs');
                bigelmt.style.border = "solid 1px green";
            } else {
                bigelmt.style.border = "solid 1px red";

                event.preventDefault();
                event.stopPropagation();
                // console.log(event );
            }
            console.log(elem3);
        });
    });
}
