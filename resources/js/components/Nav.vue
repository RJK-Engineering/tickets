<template>
    <div class="container-fluid bg-secondary">
        <nav class="navbar navbar-expand-md">
            <RouterLink class="btn btn-secondary ms-3" :to="{name: 'tickets.overview'}">
                Tickets
            </RouterLink>
        </nav>
    </div>
</template>

<script setup lang="ts">
// import {activeStatus, projectStore} from 'domains/projects';
// import {computed} from 'vue';
// import {goToLoginPage, logout} from 'domains/auth';
// import {handStore} from 'domains/hands';

// const PERCENTAGE = 100;

// projectStore.actions.getAll();
// handStore.actions.getAll();

// const projects = projectStore.getters.all;

// const activeProjects = computed(() => projects.value.filter(({status}) => status === activeStatus?.id));

// const hoursActiveProjects = computed(() => {
//     const totalHands = activeProjects.value.map(({hands}) => hands).flat();

//     return Math.round(
//         totalHands.reduce(
//             (acc, curr) => acc + (curr.hours / PERCENTAGE) * handStore.getters.byId(curr.handId).value?.efficiency,
//             0,
//         ),
//     );
// });

// const MONTHS = 12;
// const WEEKS = 12;

// const totalEfficientHoursNeeded = computed(() =>
//     Math.round(
//         activeProjects.value.reduce((acc, {hours, totalWeeks, endDate}) => {
//             if (endDate) return acc + hours / totalWeeks;
//             if (!endDate) return acc + (hours * MONTHS) / WEEKS;
//             return acc;
//         }, 0),
//     ),
// );

// const totalEfficientHoursHands = computed(() => {
//     const totalActiveHands = activeProjects.value.map(({hands}) => hands).flat();
//     const uniqueHands = [...new Set(totalActiveHands.map(hand => hand.handId))];
//     return uniqueHands.reduce((acc, next) => acc + +handStore.getters.byId(next).value?.hours, 0);
// });

// const submitLogout = async () => {
//     try {
//         await logout();
//     } finally {
//         goToLoginPage();
//     }
// };
</script>

<!-- <style>
.router-link-exact-active {
    background-color: rgba(255, 255, 255, 0.15);
}
</style> -->
