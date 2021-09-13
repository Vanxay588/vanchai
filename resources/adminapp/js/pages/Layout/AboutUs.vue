<template>
     <div class="about-section" id="aboutUs">
    	<div class="container">
        	<div class="row clearfix">
                <div class="content-column col-sm-12 col-xs-12">
                	<div class="inner-column">
                    	<div class="sec-title">
                    		<div class="title" >{{ $t('cruds.aboutUs.title') }}</div>
                        </div>
                        <div class="text"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                {{ $t('cruds.aboutUs.content1') }} <br>
                           <center>{{ $t('cruds.aboutUs.content2') }}</center> <br>
                                    {{ $t('cruds.aboutUs.position1') }}<br>
                                     {{ $t('cruds.aboutUs.position2') }}<br>
                                      {{ $t('cruds.aboutUs.position3') }}<br>
                            <center>{{ $t('cruds.aboutUs.content3') }}</center>
                        </div>
                    </div>
                         <div class="image-column col-sm-12 col-xs-12">
                            <div class="inner-column " data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="container">
                                    <div class="image">
                                    <img src="/images/structure.png" alt="">
                                    <div class="overlay-box">
                                        <div class="year-box">{{ $t('cruds.aboutUs.structure') }}</div>
                                    </div>
                                </div>
                                </div>
                                
                            </div>
                       </div>
                </div>
            </div>
        </div>
     </div>

</template>
