<template>
  <div class="pt-24">

    <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
      <!--Left Col-->
      <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
        <p class="uppercase tracking-loose w-full"> </p>
        <h1 class="my-4 text-5xl font-bold leading-tight" style=" font-size: 66px; font-family: poppins; color: #076F89; font-weight: bold; text-transform: uppercase; ">
          STUDYING <br>
          ABROAD <br>
         MADE EASY
        </h1>
        <p class="leading-normal text-2xl mb-8" style=" font-size: 37px; font-family: poppins; text-transform: uppercase; color: #232323; ">WE'VE GOT ALL THE ADVICE
AND THE BEST DEALS JUST FOR YOU!</p>

        <div class="inline-flex">
         
          <div  class="mx-auto hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg cursor-pointer">
           <form action="#">
    <input type="https://www.google.com/" placeholder="Enter your email" />
    <input class="btn btn-outline-secondary btn-lg rounded-pill" type="submit" value="Subscribe" />
  </form>
          </div>
        </div>

      </div>
      <!--Right Col-->
      <div class="w-full md:w-3/5 py-6 text-center">
      <img class="w-full md:w-5/5 z-50" :src="'PhotoBanner.png'" :alt="'stoodux'" :title="'stoodux'" />
      </div>

    </div>

  </div>
</template>
<style scoped>
input {
  font: 19px "Open Sans", Helvetica, Arial, Sans-serif;
  border-radius: 3px;
}

.page {
  width: 500px;
  margin: 50px auto 0;
}



form input[type="email"] {
  margin-right: 15px;
  width: 300px;
  color: #a09f9f;
}

form input[type="submit"] {
  padding: 10px 15px;
  color: #fff;
    border-color: #ed5561;
    padding: 0.8rem 1rem;
    font-size: 1.25rem;
  border-radius: 50rem!important;
  background: #ed5561;
  transition: all .3s ease-in-out;
}
 .btn {
    position: relative;
    overflow: hidden;
    z-index: 9;
}
.rounded-pill {
    border-radius: 50rem!important;
} .btn-lg {
    padding: 0.5rem  1rem;
    font-size: 1.25rem;
    border-radius: 0.3rem;
}

</style>
