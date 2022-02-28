<template>
  <div
    :class="{
      'flex space-x-4': variant === 'horizontal',
    }"
  >
    <ul
      class="list-none bg-blue-900 bg-opacity-30 p-1.5 rounded-lg text-center overflow-auto whitespace-nowrap"
      :class="{
        'flex items-center mb-6': variant === 'vertical',
      }"
    >
      <li
        v-for="(tab, index) in tabList"
        :key="index"
        class="w-full px-4 py-1.5 rounded-lg"
        :class="{
          'text-blue-600 bg-white shadow-xl': index + 1 === activeTab,
          'text-white': index + 1 !== activeTab,
        }"
      >
        <label
          :for="`${_uid}${index}`"
          v-text="tab"
          class="cursor-pointer block"
        />
        <input
          :id="`${_uid}${index}`"
          type="radio"
          :name="`${_uid}-tab`"
          :value="index + 1"
          v-model="activeTab"
          class="hidden"
        />
      </li>
    </ul>
    <template v-for="(tab, index) in tabList">
      <div
        :key="index"
        v-if="index + 1 === activeTab"
        class=""
      >
        <slot :name="`tabPanel-${index + 1}`" />
      </div>
    </template>
  </div>
</template>

<script>
export default {
  props: {
    tabList: {
      type: Array,
      required: true,
    },
    variant: {
      type: String,
      required: false,
      default: () => "vertical",
      validator: (value) => ["horizontal", "vertical"].includes(value),
    },
  },
  data() {
    return {
      activeTab: 1,
    };
  },
};
</script>
<style scoped>
ul.list-none.bg-blue-900.bg-opacity-30.p-1\.5.rounded-lg.text-center.overflow-auto.whitespace-nowrap.flex.items-center.mb-6 {
    background: #076F89;
}label.cursor-pointer.block {
    /* color: white !important; */
    font-size: 22px !important;
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
}
.form-select {
    background: #54B0BD !important;
    border: 1px solid #222;
    outline: none;
    padding: 10px;
    width: 100%;
    font-size: 1.1em;
    min-width: 150px;
    color: black;
    font-weight: 600;
}

.banner {
	position: relative;
	width: 100%;
}

.banner .bg {
	position: relative;
	display: flex;
	align-items: center;
	justify-content: center;
	width: 100%;
	height: 350px;
	background-color: #555;
}

.cover {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	object-fit: cover;
}

.content {
	position: relative;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
}
.content h2 {
	position: relative;
	color: #fff;
	font-size: 3em;
	text-align: center;
}

.content .btn {
	display: inline-block;
	background-color: #fa1c24;
	color: #fff;
	padding: 20px 40px;
	text-decoration: none;
	font-size: 1.1em;
	margin-top: 20px;
	letter-spacing: 2px;
}

.searchBox {
	position: absolute;
	bottom: 0;
	width: 90%;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-wrap: wrap;
	background-color: #fff;
	padding: 30px 50px;
	transform: translateY(50%);
	box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
}

.searchBox .inputBx {
	position: relative;
	margin: 0 10px;
  
}

.searchBox .inputBx p {
	color: #222;
	margin-bottom: 10px;
}

.searchBox .inputBx input {
	border: 1px solid #222;
	outline: none;
	padding: 10px;
	width: 100%;
	font-size: 1.1em;
	min-width: 150px;
      background: #54b0bd;
}

.searchBox .inputBx input[type="submit"] {
	outline: none;
	border: none;
	background-color: #F53C42;
	color: #fff;
	cursor: pointer;
	letter-spacing: 2px;
	padding: 13px;
}
.menu {
	display: none;
}
@media (max-width: 991px) {
	header {
		padding: 20px;
	}
	.group .navigation {
		display: none;
	}
	.menu {
		display: flex;
		justify-content: center;
		align-items: center;
		font-size: 2em;
		cursor: pointer;
		margin-left: 20px;
		width: 30px;
		height: 30px;
	}
	.menu i {
		position: absolute;
		stroke-width: 20px;
	}
	.menu i:first-of-type,
	.menu.active i:last-of-type {
		z-index: 1000;
		display: flex;
	}
	.menu.active i:first-of-type,
	.menu i:last-of-type {
		display: none;
	}
	.navigation.active {
		display: flex;
		justify-content: center;
		align-items: center;
		flex-direction: column;
		position: fixed;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background-color: #fff;
		z-index: 100;
	}
	.group ul.navigation li {
		margin: 2vh;
	}
	.group ul.navigation li a {
		font-size: 5vw;
		margin-left: 0;
		font-weight: 600;
	}
	.banner {
		padding: 0;
	}
	.content h2 {
		font-size: 3em;
	}
	.searchBox {
		width: 100%;
		padding: 20px;
		transform: translateY(100%);
	}
}

@media (max-width: 840px) {
	.searchBox {
		flex-direction: column;
	}
	.searchBox .inputBx {
		width: 100%;
		margin-bottom: 20px;
	}
	.searchBox .inputBx:last-of-type p {
		display: none;
	}
}

</style>
