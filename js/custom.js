/**
 * Created by Oli on 1/2/2019.
 */

$.fn.extend({
    treed: function (o) {
        var openedClass = "glyphicon-minus-sign";
        var closedClass = "glyphicon-plus-sign";

        if (typeof o != "undefined") {
            if (typeof o.openedClass != "undefined") {
                openedClass = o.openedClass;
            }
            if (typeof o.closedClass != "undefined") {
                closedClass = o.closedClass;
            }
        }

        //initialize each of the top levels
        var tree = $(this);
        tree.addClass("tree");
        tree
            .find("li")
            .has("ul")
            .each(function () {
                var branch = $(this); //li with children ul
                branch.prepend(
                    "<i class='indicator glyphicon " + closedClass + "'></i>"
                );
                branch.addClass("branch");
                branch.on("click", function (e) {
                    if (this == e.target) {
                        var icon = $(this).children("i:first");
                        icon.toggleClass(openedClass + " " + closedClass);
                        $(this)
                            .children()
                            .children()
                            .toggle();
                    }
                });
                branch
                    .children()
                    .children()
                    .toggle();
            });
        //fire event from the dynamically added icon
        tree.find(".branch .indicator").each(function () {
            $(this).on("click", function () {
                $(this)
                    .closest("li")
                    .click();
            });
        });
        //fire event to open branch if the li contains an anchor instead of text
        tree.find(".branch>a").each(function () {
            $(this).on("click", function (e) {
                $(this)
                    .closest("li")
                    .click();
                e.preventDefault();
            });
        });
        //fire event to open branch if the li contains a button instead of text
        tree.find(".branch>button").each(function () {
            $(this).on("click", function (e) {
                $(this)
                    .closest("li")
                    .click();
                e.preventDefault();
            });
        });
    }
});

//Initialization of treeviews

$("#tree1").treed();

$("#tree2").treed({
    openedClass: "glyphicon-folder-open",
    closedClass: "glyphicon-folder-close"
});

$("#tree3").treed({
    openedClass: "glyphicon-chevron-right",
    closedClass: "glyphicon-chevron-down"
});

/**
 * Function to get input id's changed value and set corresponding input's value.
 */
$.fn.extend({
    onInputValueChange: function onInputValueChange(inputId, inputText) {
        var changedInputIdValue = $("#" + inputId).val();
        var changedInputTextData;

        if (changedInputIdValue === "001") {
            changedInputTextData = "カニエＪＡＰＡＮ株式会社";
        } else if (changedInputIdValue === "002") {
            changedInputTextData = "カニエＪＡＰＡＮ 三重支店";
        } else if (changedInputIdValue === "003") {
            changedInputTextData = "カニエＪＡＰＡＮ株式会社";
        } else if (changedInputIdValue === "004") {
            changedInputTextData = "カニエＪＡＰＡＮ 健康事業部";
        } else if (changedInputIdValue === "005") {
            changedInputTextData = "カニエＪＡＰＡＮ　岐阜支店";
        }
        return $("#" + inputText).val(changedInputTextData);
    }
});

/**
 * Function to get radio button's changed value and enable/disable corresponding div's input.
 */
$.fn.extend({
    radioButtonSelectionChanged: function radioButtonSelectionChanged(
        radioInputName,
        radioInputCorrespondedDiv
    ) {
        $("input[name=" + radioInputName + "]").on("change", function () {
            var radioButtonData = $(
                "input[name=" + radioInputName + "]:checked"
            ).val();

            if (radioButtonData === "all") {
                $("#" + radioInputCorrespondedDiv + " :input").prop("disabled", true);
            } else {
                $("#" + radioInputCorrespondedDiv + " :input").prop("disabled", false);
            }
        });
    }
});

/**
 * Function to get input id's changed value and set corresponding select's options.
 */
$.fn.extend({
    onSelectBoxChange: function onSelectBoxChange(inputId, selectBoxId) {
        var changedInputValue = $("#" + inputId).val();

        if (changedInputValue == "001") {
            $("#" + selectBoxId).html(
                `
        <option value='1'>1</option>
        <option value='2'>2</option>
        <option value='3'>3</option>
        <option value='4'>4</option>
        <option value='5'>5</option>
        `
            );
        } else {
            $("#" + selectBoxId).html(
                `
         <option value="掛売 ">"掛売</option>
         <option value="現金売">現金売 </option>
         <option value="掛返品 ">掛返品 </option>
         <option value="現金返品">現金返品</option>
         <option value="分割">分割"</option>
         `
            );
        }
    }
});

$(document).ready(function () {
    $("select#outputSectionSortBySelection2").css("display", "none");
    $("#outputSectionSortBySelectionId").on("change", function () {
        if ($("#outputSectionSortBySelectionId").val() === "1") {
            $("select#outputSectionSortBySelection1").css("display", "block");
            $("select#outputSectionSortBySelection2").css("display", "none");
        } else {
            $("select#outputSectionSortBySelection1").css("display", "none");
            $("select#outputSectionSortBySelection2").css("display", "block");
        }
    });

    $("select#outputSectionSortBySelection1").on("change", function () {
        var text = $("select#outputSectionSortBySelection1").val();
        $("#outputSectionSortBySelectionText").text(text);
    });

    $("select#outputSectionSortBySelection2").on("change", function () {
        var text = $("select#outputSectionSortBySelection2").val();
        $("#outputSectionSortBySelectionText").text(text);
    });
});