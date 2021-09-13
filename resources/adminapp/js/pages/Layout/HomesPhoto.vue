<template>
    <div class="home-image" id="homes">
      <div class="container" >
        <div class="home-text">
          <h1>
              {{ $t('panel.welcome') }}&nbsp;&nbsp;{{ $t('panel.site_title') }}
          </h1>
            <p class="tagline">
              <span class="change-container">
                <span class="changing">{{ $t('panel.slogan1') }}</span>
                <span class="changing">{{ $t('panel.slogan2') }}</span>
                <span class="changing">{{ $t('panel.slogan3') }}</span>
              </span>
            </p>
                <span>
                    <a href="/login"
                    class="btn btn-primary btn-round">
                    <i class="material-icons">login</i>&nbsp;
                    {{ $t('global.login') }}
                    </a> 
                </span>
                <span style="padding-left:10px">
                    <a href="/register"
                    class="btn btn-primary btn-round">
                    <i class="material-icons">app_registration</i>&nbsp;
                    {{ $t('global.register') }}
                    </a> 
                </span>
              <mobile-languages></mobile-languages>
        </div>
     </div>
  </div>
</template>
  <style>
  h1 {
      font-size: 30px;
      font-weight: 600;
      color: ghostwhite;
      padding-bottom: 25px;
      display: contents;
      line-height: 1.5em;
  }
  p{
    font-weight: 500;  
  } 

  .tagline {
    margin-top:20px;
  }

  .tagline .change-container{
      position: relative;
      display: inline-block;
      width: 580px;
    /*   margin-bottom: 20px;
      margin-top: 20px; */
  }

  .changing {
      position: absolute;
      overflow: hidden;
      left:0;
      bottom:0;
      height:0;
      opacity:0;
      color: ghostwhite;
      word-spacing: 5px;
      text-align: center;
      font-size: 18px;
    
  }

  .changing:nth-child(1) {
    animation: revealNextWord 6s cubic-bezier(0.57, 1.52, 0.9, 1.08) 1.5s infinite;
  }

  .changing:nth-child(2) {
    animation: revealNextWord 6s cubic-bezier(0.57, 1.52, 0.9, 1.08) 3s infinite;
  }

  .changing:nth-child(3) {
    animation: revealNextWord 6s cubic-bezier(0.57, 1.52, 0.9, 1.08) 4.5s infinite;
  }

  @keyframes revealNextWord {
    0% { 
      opacity: 0.3; 
      height: 0.0; 
    }
    10% { 
      opacity: 1; 
      height:1.2em; 
    }
    20% { 
      opacity: 1; 
      height:1.2em; 
    }
    28% { 
      opacity: 0; 
      height:2em; 
    }
    
  }
</style>