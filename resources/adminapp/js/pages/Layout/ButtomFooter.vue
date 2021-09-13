<template>
    <div class="Allrightsreserved"> 
        <p> <small>
            &copy;
            {{ $t('global.allRightsReserved') }}
            2021-{{ new Date().getFullYear() }} 
            {{ $t('panel.made') }}   
            {{ $t('panel.author') }} 
             </small>
        </p>
    </div>
</template>
<style scoped>
    .Allrightsreserved{
    position: relative;
    bottom: 0px;
    background-color: #1e1e1e;
    width: 100%;
    text-align: center;
    padding: 5px;
    color:ghostwhite;
    border-top: 4px solid darkslateblue;  
    }
</style>