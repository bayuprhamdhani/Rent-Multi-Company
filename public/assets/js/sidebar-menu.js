$(function() {
    "use strict";


$.sidebarMenu = function(menu) {
	var animationSpeed = 300,
		subMenuSelector = '.sidebar-submenu';
	$(menu).on('click', 'li a', function(e) {
		var $this = $(this);
		var checkElement = $this.next();
		if (checkElement.is(subMenuSelector) && checkElement.is(':visible')) {
			checkElement.slideUp(animationSpeed, function() {
				checkElement.removeClass('menu-open');
			});
			checkElement.parent("li").removeClass("active");
		}
		//If the menu is not visible
		else if ((checkElement.is(subMenuSelector)) && (!checkElement.is(':visible'))) {
			//Get the parent menu
			var parent = $this.parents('ul').first();
			//Close all open menus within the parent
			var ul = parent.find('ul:visible').slideUp(animationSpeed);
			//Remove the menu-open class from the parent
			ul.removeClass('menu-open');
			//Get the parent li
			var parent_li = $this.parent("li");
			//Open the target menu and add the menu-open class
			checkElement.slideDown(animationSpeed, function() {
				//Add the class active to the parent li
				checkElement.addClass('menu-open');
				parent.find('li.active').removeClass('active');
				parent_li.addClass('active');
			});
		}
		//if this isn't a link, prevent the page from being redirected
		if (checkElement.is(subMenuSelector)) {
			e.preventDefault();
		}
	});
}



});

$(document).ready(function() {
    $('#service').on('change', function() {
      if ($(this).val() === 'Rent') {
        $('#city').show();
		$('#formrentbusbudimantasik').hide();
		$('#formrentbusmayasaritasik').hide();
		$('#formrentbusdoatasik').hide();
      } else {
		$('#formrentbusbudimantasik').hide();
		$('#formrentbusmayasaritasik').hide();
		$('#formrentbusdoatasik').hide();
		$('#bustasik').hide();
		$('#minibustasik').hide();
        $('#tasikmalaya').hide();
		$('#bandung').hide();
		$('#city').val('Choose City').hide();
      }
    });
  });

  $(document).ready(function() {
    $('#city').on('change', function() {
      if ($(this).val() === 'Tasikmalaya') {
        $('#tasikmalaya').show();
      } else {
        $('#tasikmalaya').hide();
		$('#formrentbusbudimantasik').hide();
		$('#formrentbusmayasaritasik').hide();
		$('#formrentbusdoatasik').hide();
		$('#bustasik').hide();
		$('#minibustasik').hide();
      }
    });
  });

  $(document).ready(function() {
    $('#city').on('change', function() {
      if ($(this).val() === 'Bandung') {
        $('#bandung').show();
      } else {
        $('#bandung').hide();
		$('#formrentbusbudimantasik').hide();
		$('#formrentbusmayasaritasik').hide();
		$('#formrentbusdoatasik').hide();
      }
    });
  });

  $(document).ready(function() {
    $('#city').on('change', function() {
      if ($(this).val() === 'Jakarta') {
        $('#jakarta').show();
      } else {
        $('#jakarta').hide();
		$('#formrentbusbudimantasik').hide();
		$('#formrentbusmayasaritasik').hide();
		$('#formrentbusdoatasik').hide();
      }
    });
  });

  $(document).ready(function() {
    $('#city').on('change', function() {
      if ($(this).val() === 'Depok') {
        $('#depok').show();
      } else {
        $('#depok').hide();
		$('#formrentbusbudimantasik').hide();
		$('#formrentbusmayasaritasik').hide();
		$('#formrentbusdoatasik').hide();
      }
    });
  });

  $(document).ready(function() {
    $('#city').on('change', function() {
      if ($(this).val() === 'Bekasi') {
        $('#bekasi').show();
      } else {
        $('#bekasi').hide();
		$('#formrentbusbudimantasik').hide();
		$('#formrentbusmayasaritasik').hide();
		$('#formrentbusdoatasik').hide();
      }
    });
  });

  $(document).ready(function() {
    $('#specifict').on('change', function() {
      if ($(this).val() === 'B 2156 TOR') {
        $('#1bus1').show();
		$('#1AVehicle').hide();
      } else {
        $('#1AVehicle').show();
        $('#1bus1').hide();
      }
    });
  });

  $(document).ready(function() {
    $('#specifict2').on('change', function() {
      if ($(this).val() === 'B 2156 TOR') {
        $('#2bus1').show();
		$('#2AVehicle').hide();
      } else {
        $('#2AVehicle').show();
        $('#2bus1').hide();
      }
    });
  });

  $(document).ready(function() {
    $('#specifict3').on('change', function() {
      if ($(this).val() === 'B 2156 TOR') {
        $('#3bus1').show();
		$('#3AVehicle').hide();
      } else {
        $('#3AVehicle').show();
        $('#3bus1').hide();
      }
    });
  });

  $(document).ready(function() {
    $('#city').on('change', function() {
      if ($(this).val() === 'jakarta') {
        $('#Bandung').show();
		$('#bustasik').hide();
		$('#minibustasik').hide();
      } else {
        $('#Bandung').hide();
      }
    });
  });

  $(document).ready(function() {
    $('#service').on('change', function() {
      if ($(this).val() === 'Tour') {
        $('#tour').show();
      } else {
        $('#tour').hide();
      }
    });
  });

  $(document).ready(function() {
	$('#bus').on('click', function() {
	  if ($('#bustasik').is(':hidden')) {
		$('#bustasik').show();
	  } else {
		$('#bustasik').hide();
	  }
	});
  });

