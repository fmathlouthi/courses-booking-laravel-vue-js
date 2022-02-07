<template>
  <section class="bg-white border-b py-8">
    <div class="container max-w-5xl mx-auto m-8">
    
       <SearchTabs class="w-12/12 lg:w-12/12 mx-auto mb-16" :tabList="tabList">
      <template v-slot:tabPanel-1> 
          <div class="banner">
			  <form>
	<div class="bg">
		<img src="https://images.unsplash.com/photo-1583136160711-d68dbe61cf9c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" class="cover" />
		<div class="content">
			<h2>SEARCH OUR LANGUAGE COURSES OFFERING</h2>
			
		</div>
		<div class="searchBox">
			<div class="inputBx">
				<p>I want to learn</p>
				  
                            
                            <select class="form-select" aria-label="Default select example" v-model='language' @change='getCountries()'>
                                <option value='0' >Select language</option>
                                <option v-for='data in languages' :value='data.id' :key="'cc' + data.id">{{ data.name }}</option>
                            </select>
			
			</div>
			<div class="dateInps"></div>
			<div class="inputBx">
				<p>Where</p>
            <select
            :disabled="!isFormValidcountry"
        :class="{ 'opacity-25 cursor-not-allowed': !isFormValidcountry }"
             class="form-select" aria-label="Default select example" v-model='country' @change='getCities()'>
                                <option value='0' >Select country</option>
                                <option v-for='data in countries' :value='data.id' :key="'cc' + data.id">{{ data.name }}</option>
                            </select>
           
			</div>
			<div class="inputBx">
				<p>IN</p>
			  <select
        :disabled="!isFormValid"
        :class="{ 'opacity-25 cursor-not-allowed': !isFormValid }"
         class="form-select" aria-label="Default select example" v-model='city' >
                                <option value='0' >Select city</option>
                                <option v-for='data in cities' :value='data.id' :key="'cc' + data.id">{{ data.name }}</option>
                            </select>
			</div>
			<div class="inputBx">
				<p class="white">&nbsp;</p>
				<input type="submit" 
        :disabled="!isFormValid"
        :class="{ 'opacity-25 cursor-not-allowed': !isFormValid }"
         @click.stop.prevent="submit()" value="Find" />
				</div>
		</div>
	</div>
	</form>
</div>
    

      </template>
      <template v-slot:tabPanel-2> 
           <div class="banner">
	<div class="bg">
		<img src="https://images.unsplash.com/photo-1583136160711-d68dbe61cf9c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" class="cover" />
		<div class="content">
			<h2>SEARCH OUR PATHWAYS</h2>
			
		</div>
		<div class="searchBox">
			<div class="inputBx">
				<p>I want to learn</p>
				<select class="form-select" aria-label="Default select example">
            <option selected>Select a language</option>
            <option value="1">Français</option>
            <option value="2">English</option>
            <option value="3">Spanish</option>
          </select>
			</div>
			<div class="dateInps"></div>
			<div class="inputBx">
				<p>Where</p>
			<select class="form-select" aria-label="Default select example">
            <option selected>  Chose Country     </option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
            </select>
			</div>
			<div class="inputBx">
				<p>IN</p>
			<select class="form-select" aria-label="Default select example">
            <option selected>   Chose city    </option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
			</div>
			<div class="inputBx">
				<p class="white">&nbsp;</p>
				<input type="submit" value="Find" />
			</div>
		</div>
	</div>
</div>
           </template>
      <template v-slot:tabPanel-3> 
           <div class="banner">
	<div class="bg">
		<img src="https://images.unsplash.com/photo-1583136160711-d68dbe61cf9c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" class="cover" />
		<div class="content">
			<h2>SEARCH OUR ACCOMMODATIONS</h2>
			
		</div>
		<div class="searchBox">
			<div class="inputBx">
				<p>I want to learn</p>
				<select class="form-select" aria-label="Default select example">
            <option selected>Select a language</option>
            <option value="1">Français</option>
            <option value="2">English</option>
            <option value="3">Spanish</option>
          </select>
			</div>
			<div class="dateInps"></div>
			<div class="inputBx">
				<p>Where</p>
			<select class="form-select" aria-label="Default select example">
            <option selected>  Chose Country     </option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
            </select>
			</div>
			<div class="inputBx">
				<p>IN</p>
			<select class="form-select" aria-label="Default select example">
            <option selected>   Chose city    </option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
			</div>
			<div class="inputBx">
				<p class="white">&nbsp;</p>
				<input type="submit" value="Find" />
			</div>
		</div>
	</div>
</div>
           </template>
      <template v-slot:tabPanel-4> 
           <div class="banner">
	<div class="bg">
		<img src="https://images.unsplash.com/photo-1583136160711-d68dbe61cf9c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" class="cover" />
		<div class="content">
			<h2>SEARCH OUR UNIVERSITIES</h2>
			
		</div>
		<div class="searchBox">
			<div class="inputBx">
				<p>I want to learn</p>
				<select class="form-select" aria-label="Default select example">
            <option selected>Select a language</option>
            <option value="1">Français</option>
            <option value="2">English</option>
            <option value="3">Spanish</option>
          </select>
			</div>
			<div class="dateInps"></div>
			<div class="inputBx">
				<p>Where</p>
			<select class="form-select" aria-label="Default select example">
            <option selected>  Chose Country     </option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
            </select>
			</div>
			<div class="inputBx">
				<p>IN</p>
			<select class="form-select" aria-label="Default select example">
            <option selected>   Chose city    </option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
			</div>
			<div class="inputBx">
				<p class="white">&nbsp;</p>
				<input type="submit" value="Find" />
			</div>
		</div>
	</div>
</div>
           </template>
    </SearchTabs>

    </div>
  </section>
</template>

<script>

  import SearchTabs from '../components/SearchTabsComponent';

  export default {
    components: {
      
      SearchTabs
    },
     data() {
    return {
		
      language: 0,
      languages: [],
      isFormValid: false,
      isFormValidcountry: false,
	  country: 0,
      countries: [],
	  city: 0,
      cities: [],
      tabList: ["Language", "Pathway", "Accommodations", "Universities"],
    };
  },
    methods: {
		 submit() {
         //if you want to send any data into server before redirection then you can do it here
         this.$router.push(`/searchcourses?language=${this.language}&city=${this.city}&country=${this.country}`);
      },
     getlanguages: function(){
                axios.get('/languages')
                    .then(function (response) {
                        this.languages = response.data.data;
                    }.bind(this));

            },
			 getCountries: function(){
                axios.get(`/countrybylanguage`,{
                    params: {
                        languageId: this.language
                    }
                })
                    .then(function (response) {
                        this.countries = response.data;
                        this.isFormValidcountry = true
                    }.bind(this));

            },
				 getCities: function(){
                axios.get(`/citiesbycountry`,{
                    params: {
                        countryid: this.country
                        
                    }
                })
                    .then(function (response) {
                        this.cities = response.data;
                        this.isFormValid= true
                    }.bind(this));

            },
	},
	

	created: function(){
            this.getlanguages()
        }
    

  }
</script>

