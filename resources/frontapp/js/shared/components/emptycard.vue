<template>
  
<div class="container-fluid mt-100">
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="
    background-color: #076f8900 !important;
">
                <div class="card-header">
                   
                </div>
                <div class="card-body cart">
                    <div class="col-sm-12 empty-cart-cls text-center">  <b-icon icon="arrow-counterclockwise" animation="spin-reverse-pulse" font-scale="4"></b-icon>
                        <h3><strong>Your Cart is Empty</strong></h3>
                        <h4>Add something to make me happy :)</h4> 
                        
                            <router-link to="/"  class="btn btn-primary cart-btn-transform m-3">
                    continue shopping 
                  </router-link>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>


<style scoped>
.success {
  color: #999;
  font-size: 10rem;
}
</style>
