<template>
    <platform-select v-model="reviewFilter"></platform-select>

    <div class="reviews_card_wrapper">
        <review-card></review-card>
        <review-card></review-card>
        <review-card></review-card>
        <review-card></review-card>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import PlatformSelect from './PlatformSelect.vue';
import ReviewCard from './ReviewCard.vue';

let reviewFilter = ref('')

</script>
