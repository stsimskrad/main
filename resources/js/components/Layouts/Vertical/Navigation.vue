
<template>
<div id="sidebar-menu">
    <ul id="side-menu" class="metismenu list-unstyled">
        <template v-for="item in menuItems" v-if="item.user.includes(user.role) || item.user.length == 0">
            <li class="menu-title" v-if="item.isTitle" :key="item.id">
                {{ $t(item.label) }}
            </li>
            <li v-if="!item.isTitle && !item.isLayout" @click="chck(item.link)" :key="item.id" :class="[(item.link == clicked) ? chk2(item.links) : chk(item.subItems)]" >
                <a v-if="hasItems(item)" href="javascript:void(0);" class="is-parent" :class="{ 'has-arrow': !item.badge, 'has-dropdown': item.badge }">
                    <i :class="`bx ${item.icon}`" v-if="item.icon"></i>
                    <span>{{ $t(item.label) }}</span>
                    <span :class="`badge rounded-pill bg-${item.badge.variant} float-end`" v-if="item.badge">{{ $t(item.badge.text) }}</span>
                </a>

                <router-link :to="item.link" v-if="!hasItems(item)" class="side-nav-link-ref">
                    <i :class="`bx ${item.icon}`" v-if="item.icon"></i>
                    <span>{{ $t(item.label) }}</span>
                    <span :class="`badge rounded-pill bg-${item.badge.variant} float-end`" v-if="item.badge">{{ $t(item.badge.text) }}</span>
                </router-link>

                <ul v-if="hasItems(item)" class="sub-menu" aria-expanded="false">
                    <li v-for="(subitem, index) of item.subItems" @click="chcks(subitem.link)" :key="'s'+index" :class="[(subitem.link == clicked2) ? 'mm-active' : '']">
                        <router-link :to="subitem.link" v-if="!hasItems(subitem)" class="side-nav-link-ref">
                             <i :class="`bx ${subitem.icon}`" v-if="subitem.icon"></i> {{ $t(subitem.label) }}
                        </router-link>
                        <a v-if="hasItems(subitem)" class="side-nav-link-a-ref has-arrow" href="javascript:void(0);">{{ $t(subitem.label) }}</a>
                        <ul v-if="hasItems(subitem)" class="sub-menu mm-collapse" aria-expanded="false">
                            <li v-for="(subSubitem, index) of subitem.subItems" :key="index">
                                <router-link :to="subSubitem.link" class="side-nav-link-ref">
                                    {{ $t(subSubitem.label) }}
                                </router-link>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </template>
    </ul>
</div>
</template>

<script>
import MetisMenu from "metismenujs/dist/metismenujs";

import {
    menuItems
} from "./Menu";

export default {
    props: ['user'],
    data() {
        return {
            menuItems: menuItems,
            menuData: null,
            clicked: window.location.pathname,
            clicked2: window.location.pathname,
            a: false
        };
    },

    methods: {
        chck(id){
            this.clicked = id;
        },
        chcks(id){
            this.clicked2 = id;
            this.clicked = this.clicked2;
        },
        chk(sub){
            if(!this.a){
                if(sub != undefined){
                    if(sub.length > 0){
                        return 'mm-active';
                    }
                }
            }
        },
        chk2(){
            this.a = true;
            return 'mm-active';
        },
        hasItems(item) {
            return item.subItems !== undefined ? item.subItems.length > 0 : false;
        },
        toggleMenu(event) {
            event.currentTarget.nextElementSibling.classList.toggle("mm-show");
        },
    },
}
</script>