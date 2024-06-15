import EtuduenT from '@/components/Etuduent.vue'
import AjouterEtuduent from '@/components/AjouterEtuduent.vue'
import ModifierEtuduent from '@/components/ModifierEtuduent.vue'
import {createRouter, createWebHistory} from 'vue-router'
import ModuleS from '@/components/Modules.vue'
import ModulesEtU from '@/components/modulesetu.vue'
import AjouerModuleE from '@/components/ajouerModuleE.vue'

const router=createRouter({
history:createWebHistory(),

routes: [
{ path: '/', component:EtuduenT },
{ path: '/ajouer', component:AjouterEtuduent },
{ path: '/modifier/:id', component:ModifierEtuduent },
{ path: '/modules', component:ModuleS },
{ path: '/modulesetu/:id', component:ModulesEtU },
{ path: '/ajouerModuleE/:id', component:AjouerModuleE },
]
})

export default router