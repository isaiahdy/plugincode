(function($) {
    // Declare these variables outside any function
    var totalLoad = 0; // Total load of all appliances
    var totalKWh = 0; // Total kWh of all appliances
    //totals calc
        function updateTotals() {
      var totalKLoad = 0; // Total load of kitchen appliances
      var totalKKWh = 0; // Total kWh of kitchen appliances
      //living
      var totalOLoad = 0
      var totalOKWh = 0
      //Services
      var totalSLoad = 0
      var totalSKWh = 0

      //overall totals
      totalLoad = totalKLoad + totalOLoad + totalSLoad;
      totalKWh = totalKKWh + totalOKWh + totalSKWh;

      $("#Kappliances tr").each(function() {
            var power = $(this).find('td:eq(2) input').val();
            var kWh = $(this).find('td:eq(4)').text();

            // Convert the power and kWh values from string to float and add to total
            totalKLoad += parseFloat(power);
            totalKKWh += parseFloat(kWh);
            totalLoad += parseFloat(power);
            totalKWh += parseFloat(kWh);
        });

       $("#Oappliances tr").each(function() {
            var power = $(this).find('td:eq(2) input').val();
            var kWh = $(this).find('td:eq(4)').text();

            // Convert the power and kWh values from string to float and add to total
            totalOLoad += parseFloat(power);
            totalOKWh += parseFloat(kWh);
            totalLoad += parseFloat(power);
            totalKWh += parseFloat(kWh);
        });

       $("#Sappliances tr").each(function() {
            var power = $(this).find('td:eq(2) input').val();
            var kWh = $(this).find('td:eq(4)').text();

            // Convert the power and kWh values from string to float and add to total
            totalSLoad += parseFloat(power);
            totalSKWh += parseFloat(kWh);
            totalLoad += parseFloat(power);
            totalKWh += parseFloat(kWh);
        });

      $('#totalKLoad').text(totalKLoad.toFixed(2));
      $('#totalKKWh').text(totalKKWh.toFixed(2));
      //living
      $('#totalOLoad').text(totalOLoad.toFixed(2));
      $('#totalOKWh').text(totalOKWh.toFixed(2));
      //Services
      $('#totalSLoad').text(totalSLoad.toFixed(2));
      $('#totalSKWh').text(totalSKWh.toFixed(2));
      //totals
      $('#totalLoadDisplay').text(totalLoad.toFixed(2));
      $('#totalKWhDisplay').text(totalKWh.toFixed(2));

    }

    $(document).ready(function() {
        $('#next').click(function() {
            $('#step1').hide();
            $('#step3').hide();
            $('#step4').hide();
            $('#step5').hide();
            $('#step6').hide();
            $('#step2').show();
        });

        $('#prev').click(function() { 
            $('#step2').hide();
            $('#step3').hide();
            $('#step4').hide();
            $('#step5').hide();
            $('#step6').hide();
            $('#step1').show();
        });

        $('#next2').click(function() {
            $('#step1').hide();
            $('#step2').hide();
            $('#step4').hide();
            $('#step5').hide();
            $('#step6').hide();
            $('#step3').show();
        });

        $('#prev2').click(function() { 
            $('#step1').hide();
            $('#step3').hide();
            $('#step4').hide();
            $('#step5').hide();
            $('#step6').hide();
            $('#step2').show();
        });

        $('#next3').click(function() {
            $('#step1').hide();
            $('#step2').hide();
            $('#step3').hide();
            $('#step5').hide();
            $('#step6').hide();
            $('#step4').show();
        });

        $('#prev3').click(function() { 
            $('#step1').hide();
            $('#step2').hide();
            $('#step4').hide();
            $('#step5').hide();
            $('#step6').hide();
            $('#step3').show();
        });

        $('#next4').click(function() {
            $('#step1').hide();
            $('#step2').hide();
            $('#step3').hide();
            $('#step4').hide();
            $('#step6').hide();
            $('#step5').show();
        });

        $('#prev4').click(function() { 
            $('#step1').hide();
            $('#step2').hide();
            $('#step3').hide();
            $('#step5').hide();
            $('#step6').hide();
            $('#step4').show();
        });

        $('#next5').click(function() {
            $('#step1').hide();
            $('#step2').hide();
            $('#step3').hide();
            $('#step4').hide();
            $('#step5').hide();
            $('#step6').show();
        });

        $('#prev5').click(function() {
            $('#step1').hide();
            $('#step2').hide();
            $('#step3').hide();
            $('#step4').hide();
            $('#step6').hide();
            $('#step5').show();
        });

        //Kitchen buttons

        $('#fridgeBtn').click(function() {
            addKAppliance('Fridge', 60, 24);
        });

        $('#freezerBtn').click(function() {
            addKAppliance('Freezer', 60, 24);
        });

        $('#toasterBtn').click(function() {
            addKAppliance('Toaster', 1100, 0.1);
        });

        $('#blenderBtn').click(function() {
            addKAppliance('Blender', 450, 0.1);
        });

        $('#coffeeBtn').click(function() {
            addKAppliance('Coffee Machine', 1000, 0.1);
        });

        $('#dishwasherBtn').click(function() {
            addKAppliance('Dishwasher', 1800, 1.5);
        });

        $('#foodprocessorBtn').click(function() {
            addKAppliance('Food Processor', 600, 0.1);
        });

        $('#microwaveBtn').click(function() {
            addKAppliance('Microwave', 800, 0.1);
        });

        $('#ovenBtn').click(function() {
            addKAppliance('Oven', 3500, 1.5);
        });

        $('#slowcookerBtn').click(function() {
            addKAppliance('Slow Cooker', 300, 2);
        });

        $('#electricstoveBtn').click(function() {
            addKAppliance('Electric Stove', 3000, 1);
        });

        $('#kettleBtn').click(function() {
            addKAppliance('Kettle', 2000, 0.1);
        });

        $('#airfryerBtn').click(function() {
            addKAppliance('Air Fryer', 1100, 0.25);
        });

        $('#washerBtn').click(function() {
        addKAppliance('Washing Machine', 750, 1.5);
        });

        $('#dryerBtn').click(function() {
        addKAppliance('Dryer', 3000, 1);
        });

        $('#ironBtn').click(function() {
        addKAppliance('Iron', 1000, 0.25);
        });

        $('#clothesBtn').click(function() {
        addKAppliance('Clothes Steamer', 1000, 0.25);
        });

        //Living & Office

        $('#smlacBtn').click(function() {
        addOAppliance('Small AirCon', 1000, 2);
        });

        $('#lrgacBtn').click(function() {
        addOAppliance('Large AirCon', 2000, 2);
        });

        $('#televisionBtn').click(function() {
        addOAppliance('Television', 100, 6);
        });

        $('#dvdBtn').click(function() {
        addOAppliance('DVD Player', 15, 2);
        });

        $('#streamingBtn').click(function() {
        addOAppliance('Streaming Device', 10, 4);
        });

        $('#speakersBtn').click(function() {
        addOAppliance('Sound system/speakers', 50, 4);
        });

        $('#consoleBtn').click(function() {
        addOAppliance('Gaming Console', 150, 3);
        });

        $('#laptopBtn').click(function() {
        addOAppliance('Laptop Computer', 50, 4);
        });

        $('#desktopBtn').click(function() {
        addOAppliance('Desktop Computer', 150, 8);
        });

        $('#printerBtn').click(function() {
        addOAppliance('Printer', 100, 0.1);
        });

        $('#wirelessspeakerBtn').click(function() {
        addOAppliance('Wireless Speakers', 20, 3);
        });

        $('#spaBtn').click(function() {
        addOAppliance('Spa', 4000, 1);
        });
        
        $('#lightBtn').click(function() {
        addOAppliance('Light(LED)', 10, 4);
        });

        $('#lighthaloBtn').click(function() {
        addOAppliance('Light(Halogen)', 90, 4);
        });

        $('#fanBtn').click(function() {
        addOAppliance('Fan', 75, 2);
        });

        //Service

        $('#waterBtn').click(function() {
        addSAppliance('Water Heater (electric)', 4000, 2.5);
        });

        $('#poolpumpBtn').click(function() {
        addSAppliance('Pool pump', 1500, 8);
        });

        $('#waterpumpBtn').click(function() {
        addSAppliance('Water pump', 1000, 0.5);
        });

        $('#borepumpBtn').click(function() {
        addSAppliance('Bore pump', 1500, 3);
        });

        $('#reticBtn').click(function() {
        addSAppliance('Retic pump', 25, 0.33);
        });

        $('#rechargeBtn').click(function() {
        addSAppliance('Rechargeable power tool', 600, 1);
        });

        $('#welderBtn').click(function() {
        addSAppliance('Welder', 3000, 0.5);
        });

        $('#homebrewBtn').click(function() {
        addSAppliance('Heated home brew', 1000, 0.5);
        });

        $('#latheBtn').click(function() {
        addSAppliance('Lathe/Milling Machine', 1000, 0.2);
        });

        $('#woodworkBtn').click(function() {
        addSAppliance('Woodwork Machinery', 1000, 0.1);
        });

        $('#hoistBtn').click(function() {
        addSAppliance('Hoist', 1000, 0.1);
        });

        $('#modemBtn').click(function() {
        addSAppliance('Router or modem', 10, 24);
        });

        $('#delserBtn').click(function() {
        addSAppliance('Dell Server', 450, 24);
        });

        $('#kymetaBtn').click(function() {
        addSAppliance('Kymeta Hawk', 130, 24);
        });

        $('#ptpBtn').click(function() {
        addSAppliance('Point to Point', 20, 24);
        });

        $('#repeaterBtn').click(function() {
        addSAppliance('Cel-Fi Repeater', 320, 24);
        });                     

        $('#cctvBtn').click(function() {
        addSAppliance('CCTV', 10, 24);
        });

        $('#cctvptzBtn').click(function() {
        addSAppliance('CCTV - PTZ', 20, 24);
        });

        $('#harencBtn').click(function() {
        addSAppliance('Harvest Encoder', 60, 24);
        });

        $('#leoBtn').click(function() {
        addSAppliance('LEO', 140, 24);
        });

        $('#airfiBtn').click(function() {
        addSAppliance('AirFibre Antenna', 15, 24);
        });

        $('#sectorBtn').click(function() {
        addSAppliance('120 Degree 5G Sector', 8, 24);
        });

        $('#yagiBtn').click(function() {
        addSAppliance('Yagi Antenna', 6.5, 24);
        });

        $('#smlethBtn').click(function() {
        addSAppliance('Small Ethernet Switch', 50, 24);
        });

        $('#lrgethBtn').click(function() {
        addSAppliance('Large Ethernet Switch', 750, 24);
        });

        $('#dvrBtn').click(function() {
        addSAppliance('DVR', 20, 24);
        });

        $('#wapBtn').click(function() {
        addSAppliance('WAP', 10, 24);
        });

        $('#starlinkBtn').click(function() {
        addSAppliance('Starlink', 60, 24);
        });

        $('#minerBtn').click(function() {
        addSAppliance('Bitcoin Miner', 500, 24);
        });

        $(document).on('click', '#customBtn', function() {
        addSAppliance('Custom', 100, 2, true);
        });


        $(document).on('click', '.bin-btn', function() {
          $(this).closest('tr').remove();
          $('#Kappliances input, #Oappliances input, #Sappliances input').trigger('change');
          updateTotals();
        });


    
        $(document).on('change', '#Kappliances input, #Oappliances input, #Sappliances input', function() {
  var row = $(this).closest('tr')[0];
  var qty = parseFloat(row.cells[1].getElementsByTagName("input")[0].value);
  var load = parseFloat(row.cells[2].getElementsByTagName("input")[0].value);
  var usage = parseFloat(row.cells[3].getElementsByTagName("input")[0].value);
  var kWh = qty * load * usage / 1000; // Divide by 1000 to get kWh
  row.cells[4].innerHTML = kWh.toFixed(2);
  updateTotals();
});



        $('#multistep_form').submit(function(e) {
            e.preventDefault();

        var fname = $('#fname').val();
        var lname = $('#lname').val();
        var email = $('#email').val();
        var message = $('#message').val();
        var phone = $('#phone').val();
        var clientname = $('#clientname').val();
        var projectname = $('#projectname').val();
        var address = $('#address').val();
        var suburb = $('#suburb').val();
        var postcode = $('#postcode').val();
        var state = $('#state').val();
        var country = $('#country').val();
        var appli = $('#appli').val();
        var reserve = $('#reserve').val();
        var winter = $('#winter').val();
        var daytime = $('#daytime').val();
        var generator = $('#generator').val();
        var electricalPhase = $('#electrical-phase').val();

        var appliances = [];

        $('#Kappliances input, #Oappliances input, #Sappliances input').trigger('change');

        var totalKLoad = $('#totalKLoad').text();
        var totalKKWh = $('#totalKKWh').text();
        var totalOLoad = $('#totalOLoad').text();
        var totalOKWh = $('#totalOKWh').text();
        var totalSLoad = $('#totalSLoad').text();
        var totalSKWh = $('#totalSKWh').text();

        $("#Kappliances tr").each(function() {
        var appliance = $(this).find('td:eq(0)').text();
        var qty = $(this).find('td:eq(1) input').val();
        var power = $(this).find('td:eq(2) input').val();
        var usage = $(this).find('td:eq(3) input').val();
        var kWh = $(this).find('td:eq(4)').text();
        appliances.push({
        name: appliance,
        qty: qty,
        power: power,
        usage: usage,
        kWh: kWh
        });
    });

        var livingAppliances = [];
        $("#Oappliances tr").each(function() {
        var appliance = $(this).find('td:eq(0)').text();
        var qty = $(this).find('td:eq(1) input').val();
        var power = $(this).find('td:eq(2) input').val();
        var usage = $(this).find('td:eq(3) input').val();
        var kWh = $(this).find('td:eq(4)').text();
        livingAppliances.push({
        name: appliance,
        qty: qty,
        power: power,
        usage: usage,
        kWh: kWh
        });
    });

        var serviceAppliances = [];
        $("#Sappliances tr").each(function() {
        var appliance = $(this).find('td:eq(0)').text();
        var qty = $(this).find('td:eq(1) input').val();
        var power = $(this).find('td:eq(2) input').val();
        var usage = $(this).find('td:eq(3) input').val();
        var kWh = $(this).find('td:eq(4)').text();
        if ($(this).find('td:eq(0) input').length) {
            appliance = $(this).find('td:eq(0) input').val();
        }
        serviceAppliances.push({
            name: appliance,
            qty: qty,
            power: power,
            usage: usage,
            kWh: kWh
        });
    });

        var items = [];
        $('input[name="item[]"]:checked').each(function() {
        items.push($(this).val());
        });

        console.log("Selected Items:", items);

        $.ajax({
        type: 'POST',
        url: my_ajax_object.ajax_url,
        data: {
          action: 'submit_form',
          fname: fname,
          lname: lname,
          email: email,
          items: items,
          message: message,
          phone: phone,
          clientname: clientname,
          projectname: projectname,
          address: address,
          suburb: suburb,
          postcode: postcode,
          state: state,
          country: country,
          appli: appli,
          reserve: reserve,
          winter: winter,
          daytime: daytime,
          generator: generator,
          electricalPhase: electricalPhase,
          appliances: JSON.stringify(appliances),
          livingAppliances: JSON.stringify(livingAppliances),
          serviceAppliances: JSON.stringify(serviceAppliances),
          totalKLoad: totalKLoad,
          totalKKWh: totalKKWh,
          totalOLoad: totalOLoad,
          totalOKWh: totalOKWh,
          totalSLoad: totalSLoad,
          totalSKWh: totalSKWh,
          totalLoad: totalLoad,
          totalKWh: totalKWh,
        },
    success: function(response) {
        alert(response);
        $('#totalLoadDisplay').html(totalLoad);
        $('#totalKWhDisplay').html(totalKWh);
        },
    error: function(response) {
        console.log('Error:', response.message);
    }
});

    });
});

    window.addKAppliance = function(type, load, usage) {
        addAppliance("Kappliances", type, load, usage, updateKWh, deleteRow);
        updateTotals();
    }

    window.addOAppliance = function(type, load, usage) {
        addAppliance("Oappliances", type, load, usage, updateOKWh, deleteORow);
        updateTotals();
    }

    window.addSAppliance = function(type, load, usage, custom) {
    addAppliance("Sappliances", type, load, usage, updateSKWh, deleteSRow, custom);
    updateTotals();
}


    window.addAppliance = function(tableId, type, load, usage, updateFunction, deleteFunction, custom) {
    var table = document.getElementById(tableId);
    var row = table.insertRow(-1);
    var applianceCell = row.insertCell(0);
    var qtyCell = row.insertCell(1);
    var loadCell = row.insertCell(2);
    var usageCell = row.insertCell(3);
    var kWhCell = row.insertCell(4);
    var deleteCell = row.insertCell(5);

    if(custom) {
        applianceCell.innerHTML = "<input type='text' name='appliance' value='Custom' style='background-color: lightgrey'>";
    } else {
        applianceCell.innerHTML = type;
    }
    qtyCell.innerHTML = "<input type='number' name='qty' value='1' style='width: 100px; background-color: lightgrey'>";
    loadCell.innerHTML = "<input type='number' name='load' step='any' value='" + load + "' style='background-color: lightgrey'>";
    usageCell.innerHTML = "<input type='number' name='usage' step='any' value='" + usage + "' style='background-color: lightgrey'>";
    
    var qty = qtyCell.querySelector("input").value;
    var kWh = qty * load * usage / 1000; // Divide by 1000 to get kWh
    kWhCell.innerHTML = kWh.toFixed(2);
    
    deleteCell.innerHTML = "<button type='button' class='bin-btn'><img src='https://positive.net.au/wp-content/uploads/2023/03/rubbish-bin.webp' alt='Delete'></button>";
}

    window.updateKWh = function(row) {
        var qty = parseFloat(row.cells[1].getElementsByTagName("input")[0].value);
        var load = parseFloat(row.cells[2].getElementsByTagName("input")[0].value);
        var usage = parseFloat(row.cells[3].getElementsByTagName("input")[0].value);
        var kWh = qty * load * usage / 1000; // Divide by 1000 to get kWh
        row.cells[4].innerHTML = kWh.toFixed(2);
    }

    window.updateOKWh = function(row) {
        var qty = parseFloat(row.cells[1].getElementsByTagName("input")[0].value);
        var load = parseFloat(row.cells[2].getElementsByTagName("input")[0].value);
        var usage = parseFloat(row.cells[3].getElementsByTagName("input")[0].value);
        var kWh = qty * load * usage / 1000; // Divide by 1000 to get kWh
        row.cells[4].innerHTML = kWh.toFixed(2);
    }

    window.updateSKWh = function(row) {
        var qty = parseFloat(row.cells[1].getElementsByTagName("input")[0].value);
        var load = parseFloat(row.cells[2].getElementsByTagName("input")[0].value);
        var usage = parseFloat(row.cells[3].getElementsByTagName("input")[0].value);
        var kWh = qty * load * usage / 1000; // Divide by 1000 to get kWh
        row.cells[4].innerHTML = kWh.toFixed(2);
    }

    window.deleteRow = function(row) {
        row.parentNode.removeChild(row);
        event.stopPropagation();
    }

    window.deleteORow = function(row) {
        row.parentNode.removeChild(row);
        event.stopPropagation();
    }

    window.deleteSRow = function(row) {
        row.parentNode.removeChild(row);
        event.stopPropagation();
    }
})(jQuery);