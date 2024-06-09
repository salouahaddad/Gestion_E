import Etuduent from '@/components/Etuduent.vue'
import AjouterEtuduent from '@/components/AjouterEtuduent.vue'
import ModifierEtuduent from '@/components/ModifierEtuduent.vue'
import {createRouter, createWebHistory} from 'vue-router'

const router=createRouter({
history:createWebHistory(),

routes: [
{ path: '/', component:Etuduent },
{ path: '/ajouer', component:AjouterEtuduent },
{ path: '/modifier/:id', component:ModifierEtuduent }
]
})

export default router