<template>
    <nav class="categories">
  <ul class="nav">
    <li class="nav-item"><a class="nav-link" :class="active == 0 ? 'active' : ''" @click="updateActive(0)">Все категории</a></li>
    <li class="nav-item" :key="category.id" v-for="category in catalog.categories"><a  :class="active == category.id ? 'active' : ''" @click.prevent="updateActive(category.id)" class="nav-link">{{category.name}}</a></li> 
    <li class="nav-item">
      <a class="nav-link selected" href="/catalog.php">Замороженные продукты</a>
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="/catalog.php">Яйцо</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/catalog.php">Яйцо</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/catalog.php">Яйцо</a>
        </li>
      </ul>
    </li>
  </ul>
</nav>
</template>
<script>
export default {
  props: ["catalog"],
  data() {
    return {
      active: 0
    };
  },
  methods: {
    updateActive(id) {
      this.active = id;
      this.$emit("updateProducts", id);
    }
  }
};
</script>
