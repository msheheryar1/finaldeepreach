/*!

=========================================================
* Argon Dashboard PRO - v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard-pro
* Copyright 2019 Creative Tim (https://www.creative-tim.com)

* Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

*/
"use strict";

        var DatatableBasic = function() {
        var e = $("#datatable-basic");
        e.length && e.on("init.dt", function() {
            $("div.dataTables_length select").removeClass("custom-select custom-select-sm")
        }).DataTable({
            keys: !0,
            select: {
                style: "multi"
            },
            language: {
                paginate: {
                    previous: "<i class='fas fa-angle-left'>",
                    next: "<i class='fas fa-angle-right'>"
                }
            }
        })
    }(),
    DatatableButtons = function() {
        var e, a = $("#datatable-buttons");
        a.length && (e = {
            lengthChange: !1,
            dom: "Bfrtip",
            buttons: ["copy", "print"],
            language: {
                paginate: {
                    previous: "<i class='fas fa-angle-left'>",
                    next: "<i class='fas fa-angle-right'>"
                }
            }
        }, a.on("init.dt", function() {
            $(".dt-buttons .btn").removeClass("btn-secondary").addClass("btn-sm btn-default")
        }).DataTable(e))
    }();