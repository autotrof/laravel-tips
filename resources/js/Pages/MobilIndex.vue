<template>
    <div>INI MOBIL INDEX</div>
    <button @click="buttonClicked">Klik Saya !!</button>
    <div>{{ roda_text }}</div>
    <Link href="/mobil/create">KE MOBIL FORM</Link>
</template>

<script setup>
    import { Link } from '@inertiajs/vue3'
    import { ref, computed } from 'vue'
    const roda = ref(3)
    const buttonClicked = () => {
        roda.value++
    }
    const roda_text = computed(() => {
        return "ADA " + roda.value + "RODA"
    })
</script>
