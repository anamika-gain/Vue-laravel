<template>
  <div class="row">
    <div class="col-md-8 pb-4">
      <div class="card">
        <div class="card-body">
          <div v-if="!loading">
            <h2>{{ bookable.title }}</h2>
            <hr />
            <article>{{ bookable.description }}</article>
          </div>
          <div v-else>Loading...</div>
        </div>
      </div>

      <review-list :bookable-id="this.$route.params.id"></review-list>
    </div>
    <div class="col-md-4 pb-4">
      <button
        class="btn btn-outline-secondary btn-block"
        v-if="inBasketAlready"
        @click="removeFromBasket"
      >Remove from basket</button>

      <div
        v-if="inBasketAlready"
        class="mt-4 text-muted warning"
      >Seems like you've added this object to basket already. If you want to change dates, remove from the basket first.</div>
    </div>
  </div>
</template>

<script>
import Availability from "./Availability";

export default {
  components: {
    Availability
  },
  data() {
    return {
      bookable: null,
      loading: false
    };
  },
  created() {
    this.loading = true;
    axios.get(`/api/bookables/${this.$route.params.id}`).then(response => {
      this.bookable = response.data.data;
      this.loading = false;
    });
  }
  };
</script>

<style scoped>
.warning {
  font-size: 0.7rem;
}
</style>
