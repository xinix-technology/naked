		<script>
			function closeMenu(){
			    if ($('body').hasClass('navigating')) {
			      $('body').removeClass('navigating')
			      setTimeout(function(){
			        $('.ex-navbar').css('display','none')
			      }, 350)
			    }
			  }

				$('#menu_icon a').on('click', function(){
			    if ($('body').hasClass('navigating')) {
			      closeMenu()
			    } else {
			      $('.ex-navbar').css('display','block')
			      $('.ex-navbar')[0].offsetLeft // force render
			      $('body').addClass('navigating')
			    }
			    return false
			  })
		</script>