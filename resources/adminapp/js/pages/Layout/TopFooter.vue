<template>
  <div class="footer">
    <div class="container">
        <ul >
          <li >
            <a href="#homes">{{ $t('cruds.home.title') }}</a>
          </li>
          <li >
            <a  href="#annoucements">{{ $t('cruds.annoucement.title') }}</a>
          </li>
          <li >
            <a  href="#policy">{{ $t('cruds.policy.title') }}</a>
          </li>
          <li>
            <a href="#download"> {{ $t('cruds.download.title') }}</a>
          </li>
          <li>
            <a href="#examinationResult"> {{ $t('cruds.examinationResult.title') }}</a>
          </li>
          <li>
            <a  href="#statistics"> {{ $t('cruds.statistic.title') }}</a>
          </li>
          <li >
            <a  href="#aboutUs">{{ $t('cruds.aboutUs.title') }}</a>
          </li>
           <li >
            <a  href="#contactUs">{{ $t('cruds.contactUs.title') }}</a>
          </li>
        </ul>
    </div> 
  </div>
</template>
<style scoped>
      .footer {
        clear: both;
        position: relative;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: ghostwhite!important;
        color: lightseagreen;
        text-align: center;
        border-top: 3px solid #ffc600;
        margin-top: 2rem;
      }
      .footer ul {
        margin-bottom: 0;
        padding: 0;
        list-style: none;
      }
      .footer ul li {
        display: inline-block;
        
      }
      .footer ul li a {
        color: inherit;
        padding: 0.9375rem;
        font-weight: 500;
        font-size: 16px;
        border-radius: 3px;
        text-decoration: none;
        position: relative;
        display: block;
      }
      .footer ul li a:hover {
        text-decoration: none;
        color:#ffc600;
      }
      @media screen and (min-width: 768px) {
        .footer .copyright {
          padding-right: 15px;
        }
      }

</style>
