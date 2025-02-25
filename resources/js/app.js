import "./bootstrap";

// {{-- pph23 --}}
$(document).ready(function () {
    $("#pph23_code").change(function () {
        var rate = $(this).find(":selected").data("rate");
        $("#pph23_rate").val(rate + " %");
        calPPh23();
    });

    $("#pph23_bruto").keyup(function () {
        calPPh23();
    });
});

function calPPh23() {
    var bruto = $("#pph23_bruto").val();
    var rate = $("#pph23_code").find(":selected").data("rate");
    var result = parseFloat(bruto) * (parseFloat(rate) / 100);
    $("#pph23_result").val(result);
}

// {{-- pph42 --}}
$(document).ready(function () {
    $("#pph42_code").change(function () {
        var rate = $(this).find(":selected").data("rate");
        $("#pph42_rate").val(rate + " %");
        calPPh42();
    });

    $("#pph42_bruto").keyup(function () {
        calPPh42();
    });
});

function calPPh42() {
    var bruto = $("#pph42_bruto").val();
    var rate = $("#pph42_code").find(":selected").data("rate");
    var result = parseFloat(bruto) * (parseFloat(rate) / 100);
    $("#pph42_result").val(result || 0);
}

// {{-- pph22 --}}
$(document).ready(function () {
    $("#pph22_code").change(function () {
        var rate = $(this).find(":selected").data("rate");
        $("#pph22_rate").val(rate + " %");
        calPPh22();
    });

    $("#pph22_bruto").keyup(function () {
        calPPh22();
    });
});

function calPPh22() {
    var bruto = $("#pph22_bruto").val();
    var rate = $("#pph22_code").find(":selected").data("rate");
    var result = parseFloat(bruto) * (parseFloat(rate) / 100);
    $("#pph22_result").val(result || 0);
}

// {{-- pph15 --}}
$(document).ready(function () {
    $("#pph15_code").change(function () {
        var rate = $(this).find(":selected").data("rate");
        $("#pph15_rate").val(rate + " %");
        calPPh15();
    });

    $("#pph15_bruto").keyup(function () {
        calPPh15();
    });
});

function calPPh15() {
    var bruto = $("#pph15_bruto").val();
    var rate = $("#pph15_code").find(":selected").data("rate");
    var result = parseFloat(bruto) * (parseFloat(rate) / 100);
    $("#pph15_result").val(result || 0);
}

// {{-- ppn --}}
$(document).ready(function () {
    $("#ppn_dpp").keyup(function () {
        var dpp = $(this).val();
        var rate = $("#ppn_rate").data("rate");
        var result = parseFloat(dpp) * (parseFloat(rate) / 100);
        $("#ppn_result").val(result || 0);

        var price_after_ppn = parseFloat(dpp) + parseFloat(result);
        $("#price_after_ppn").val(price_after_ppn || 0);
    });
});

// {{-- ppnbm --}}
$(document).ready(function () {
    $("#ppnbm_dpp, #ppnbm_rate").keyup(function () {
        var dpp = $("#ppnbm_dpp").val();
        var rate = $("#ppnbm_rate").val();
        var result = parseFloat(dpp) * (parseFloat(rate) / 100);
        $("#ppnbm_result").val(result || 0);
    });
});

// pphbadan
$(document).ready(function () {
    $("#pphbadan_code").change(function () {
        var rate = $(this).find(":selected").data("rate");
        var description = $(this).find(":selected").data("description");
        $("#pphbadan_rate").val(rate + " %");
        $("#pphbadan_description").val(description);

        calPPhBadan();
    });

    $("#pphbadan_dpp, #pphbadan_bruto").keyup(function () {
        calPPhBadan();
    });
});

function calPPhBadan() {
    var code = $("#pphbadan_code").val();
    var dpp = $("#pphbadan_dpp").val();

    if (code != "31E-1") {
        $("#peredaran_bruto").addClass("hidden");

        var rate = $("#pphbadan_code").find(":selected").data("rate");
        var result = parseFloat(dpp) * (parseFloat(rate) / 100);
        $("#pphbadan_result").val(result || 0);
    } else {
        $("#peredaran_bruto").removeClass("hidden");

        let bruto = parseFloat($("#pphbadan_bruto").val()) || 0;
        let laba = parseFloat(dpp) || 0;
        let pph = 0;

        if (laba > bruto) {
            alert(
                "Penghasilan Kena Pajak tidak boleh lebih dari Peredaran Bruto"
            );
            $("#pphbadan_dpp").val(0);
            return calPPhBadan();
        }

        let batas = 4800000000; // Rp4,8 Miliar
        if (bruto <= 50000000000) {
            // Jika peredaran bruto ≤ Rp50 Miliar
            let tarifRendah = 0.5 * 0.22; // 50% dari tarif normal (22%)
            let tarifNormal = 0.22;

            $("#pphbadan_pkp_fasilitas").val(0);
            $("#pphbadan_pkp_non_fasilitas").val(0);

            if (bruto <= batas) {
                pph = laba * tarifRendah;
                $("#pphbadan_pkp_fasilitas").val(laba);
                $("#pphbadan_rate").val("(22% * 50%)");
            } else {
                $("#pphbadan_rate").val("(22% * 50%) dan 22%");

                let pkp_fasilitas = (batas * laba) / bruto;
                $("#pphbadan_pkp_fasilitas").val(pkp_fasilitas || 0);

                let pkp_non_fasilitas = laba - pkp_fasilitas;
                $("#pphbadan_pkp_non_fasilitas").val(pkp_non_fasilitas || 0);

                let bagian1 = pkp_fasilitas * tarifRendah;
                let bagian2 = pkp_non_fasilitas * tarifNormal;
                pph = bagian1 + bagian2;
            }

            $("#pphbadan_result").val(pph.toLocaleString("id-ID") || 0);
        } else {
            alert("Max 50M");
            $("#pphbadan_bruto").val(0);
            return calPPhBadan();
        }
    }
}
