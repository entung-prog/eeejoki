<script setup lang="ts">
import { Link, usePage } from '@inertiajs/vue3';
import type { PageProps } from '@/types';
const page = usePage<PageProps>();
const nav = [ ['Dashboard','dashboard'], ['Orders','orders.index'], ['Workers','workers.index'], ['Wallet','wallet.index'], ['Affiliate','affiliate.index'] ];
</script>
<template>
  <div class="min-h-screen bg-[radial-gradient(circle_at_top_left,#164e63,transparent_30%),#020617]">
    <aside class="fixed inset-y-0 left-0 hidden w-72 border-r border-white/10 bg-slate-950/80 p-6 lg:block">
      <div class="text-2xl font-black tracking-tight text-cyan-300">EEEJOKI</div>
      <p class="mt-2 text-sm text-slate-400">Outsourcing operations suite</p>
      <nav class="mt-10 space-y-2"><Link v-for="item in nav" :key="item[1]" :href="route(item[1])" class="block rounded-2xl px-4 py-3 text-sm font-medium text-slate-300 hover:bg-white/10 hover:text-white">{{ item[0] }}</Link></nav>
    </aside>
    <main class="lg:pl-72">
      <header class="sticky top-0 z-10 flex items-center justify-between border-b border-white/10 bg-slate-950/70 px-6 py-4 backdrop-blur">
        <div><p class="text-sm text-slate-400">Welcome back</p><h1 class="text-xl font-bold">{{ page.props.auth.user?.name }}</h1></div>
        <div class="flex items-center gap-4"><div class="rounded-2xl bg-white/10 px-4 py-2 text-sm">Wallet: Rp {{ page.props.auth.user?.wallet_balance ?? '0' }}</div><div class="h-10 w-10 rounded-full bg-cyan-300/20 ring-1 ring-cyan-300/40" /></div>
      </header>
      <section class="p-4 sm:p-6 lg:p-8"><div v-if="page.props.flash.success" class="mb-4 rounded-2xl border border-emerald-400/30 bg-emerald-400/10 p-4 text-emerald-200">{{ page.props.flash.success }}</div><slot /></section>
    </main>
  </div>
</template>
