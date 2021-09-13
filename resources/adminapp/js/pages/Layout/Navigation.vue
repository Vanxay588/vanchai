<template>
  <section class="navigation">
    <div class="nav-container">
      <div class="brand">
       <a href="">
         <span>
          <img src="/images/Logo.png" alt="" style="width:6%">
        </span> 
       </a>
      </div>
      <nav>
        <div class="nav-mobile"><a id="nav-toggle" href="#!"><i class="fa fa-bars" aria-hidden="true" style="color:lightseagreen"></i></a></div>
        <ul class="nav-list">
          <li>
            <a href="#homes">{{ $t('cruds.home.title') }}</a>
          </li>
          <li>
            <a  href="#annoucements">{{ $t('cruds.annoucement.title') }}</a>
          </li>
          <li>
            <a  href="#policy">{{ $t('cruds.policy.title') }}</a>
          </li>
          <li>
            <a  href="#download"> {{ $t('cruds.download.title') }}</a>
          </li>
           <li>
            <a  href="#examinationResult"> {{ $t('cruds.examinationResult.title') }}</a>
          </li>
          <li>
            <a  href="#statistics"> {{ $t('cruds.statistic.title') }}</a>
          </li>
          <li>
            <a  href="#aboutUs">{{ $t('cruds.aboutUs.title') }}</a>
          </li>
          <li>
            <a  href="#contactUs">{{ $t('cruds.contactUs.title') }}</a>
          </li>
        </ul>
      </nav>
    </div>
  </section>

</template>
<style lang="scss" scoped>
  $content-width: 1000px;
  $breakpoint: 799px;
  $nav-height: 90px;
  $nav-background: ghostwhite!important;
  $nav-font-color:  lightseagreen;
  $link-hover-color: #ffc600;
  $border: #ffc600;

  .navigation {
    height: $nav-height;
    background: $nav-background;
    border-bottom:   3px solid $border;
    display: block;
    position: fixed;
    z-index: 9999;
    width: 100%;
  }
  .brand {
    position: absolute;
    padding-left: 20px;
    float: left;
    line-height: $nav-height;
    text-transform: uppercase;
    font-size: 1.4em;
    a,
    a:visited {
      color: $nav-font-color;
      text-decoration: none;
    }
  }
  .nav-container {
    max-width: $content-width;
    margin: 0 auto;
  }

  nav {
    float: right;
    ul {
      list-style: none;
      margin: 0;
      padding: 0;
      li {
        float: left;
        position: relative;
        a,
        a:visited {
          display: initial;
          padding: 0.9375rem;
          line-height: $nav-height;
         
          color: $nav-font-color;
          text-decoration: none;
          font-weight: 500;
          font-size: 16px;
          border-radius: 3px;
          &:hover {
            color: $link-hover-color;
          }
          &:not(:only-child):after {
            padding-left: 4px;
            content: ' ▾';
          }
        }
        ul li {
          min-width: 190px;
          a {
            padding: 15px;
            line-height: 20px;
          }
        }
      }
    }
  }
  .nav-dropdown {
    position: absolute;
    display: none;
    z-index: 1;
    box-shadow: 0 3px 12px rgba(0, 0, 0, 0.15);
  }
  .nav-mobile {
    display: none;
    position: absolute;
    top: 0;
    right: 0;
    background: $nav-background;
    height: $nav-height;
    width: $nav-height;
    border-bottom: 3px solid $border;
  }
  @media only screen and (max-width: 798px) {
    .nav-mobile {
      display: block;
    }
    nav {

      padding: $nav-height 0 15px;
          text-align: right;
          background: ghostwhite;
          border-radius: 10px;
      ul {
        display: none;
       
        li {
          float: none;
          margin-bottom: 20px;
          margin-top: 20px;
          a {
            padding: 15px;
            line-height: 20px;
            margin: 30px;
            &:hover {
            color: $link-hover-color;
          }
          }
          ul li a {
            padding-left: 30px;
          }
        }
      }
    }
    .nav-dropdown {
      position: static;
    }
  }
  @media screen and (min-width: $breakpoint) {
    .nav-list {
      display: block !important;
    }
  }
  #nav-toggle {
    position: absolute;
    left: 18px;
    top: 22px;
    cursor: pointer;
    padding: 10px 35px 16px 0px;
    span,
    span:before,
    span:after {
      cursor: pointer;
      border-radius: 1px;
      height: 5px;
      width: 35px;
      background: $nav-font-color;
      position: absolute;
      display: block;
      content: '';
      transition: all 300ms ease-in-out;
    }
    span:before {
      top: -10px;
    }
    span:after {
      bottom: -10px;
    }
    &.active span {
      background-color: transparent;
      &:before,
      &:after {
        top: 0;
      }
      &:before {
        transform: rotate(45deg);
      }
      &:after {
        transform: rotate(-45deg);
      }
    }
  }
</style>
<script>
  (function($) { 
      $(function() { 
        $('nav ul li a:not(:only-child)').click(function(e) {
          $(this).siblings('.nav-dropdown').toggle();
          $('.nav-dropdown').not($(this).siblings()).hide();
          e.stopPropagation();
        });
        $('html').click(function() {
          $('.nav-dropdown').hide();
        });
        $('#nav-toggle').click(function() {
          $('nav ul').slideToggle();
        });
        $('#nav-toggle').on('click', function() {
          this.classList.toggle('active');
        });
      }); 
    })(jQuery); 
</script>