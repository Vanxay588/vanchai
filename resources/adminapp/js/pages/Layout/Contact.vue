<template>
     <div class="about-section" id="contactUs">
    	<div class="container">
        	<div class="row clearfix">
                <div class="content-column col-md-6 col-sm-12 col-xs-12" style="padding: 20px 10px 20px 30px;">
                        <div class="sec-title">
                          <div class="title" >{{ $t('cruds.contactUs.title') }}</div>
                          </div>
                          <div class="text"> 
                            <div class="mapouter"><div class="gmap_canvas"><iframe width="500" height="437" id="gmap_canvas" src="https://maps.google.com/maps?q=Wat%20Sainyaphum&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div></div>
                          </div>
                  </div>
                <div class="content-column col-md-6 col-sm-12 col-xs-12" style="padding: 20px;">
                      <br><br> <br>
                        <div class="text">
                             <h5>{{ $t('cruds.contactUs.office_location') }}</h5>
                             <div class="singel-address">
                               <i class="fa fa-home" aria-hidden="true" style="padding:15px"></i>
                                {{ $t('cruds.contactUs.full_location') }}
                             </div>
                             <div class="singel-address">
                                <i class="fa fa-phone" aria-hidden="true" style="padding:15px"></i>
                                {{ $t('cruds.contactUs.phone') }}
                             </div>
                               <div class="singel-address">
                                <i class="fa fa-whatsapp" aria-hidden="true" style="padding:15px"></i>
                                <a href="https://wa.me/02029296649" target="_blank"> {{ $t('cruds.contactUs.whatsapp') }}</a>
                             </div>
                               <div class="singel-address">
                                <i class="fa fa-facebook" aria-hidden="true" style="padding:15px"></i>
                               <a href="https://www.facebook.com/Officestudy" target="_blank">{{ $t('panel.site_title') }}</a>
                             </div>
                             <div class="singel-address">
                                <i class="fa fa-envelope-o" aria-hidden="true" style="padding:15px"></i>
                               <a href="mailto:Inthapunya@gmail.com" target="_blank">Inthapunya@gmail.com</a>
                             </div>
                        </div>
                </div>
            </div>
        </div>
     </div>
</template>
<style scoped>
    a{
        color: #333333;
    }
    a:hover{
        color:#ffc600;
    }
     .mapouter
      {
      position:relative;
      text-align:right;
      height:437px;
      width:500px;
      }
      .gmap_canvas
      {
        overflow:hidden;
        background:none!important;
        height:437px;
        width:500px;
      }
</style>
