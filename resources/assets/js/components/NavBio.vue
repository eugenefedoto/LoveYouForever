<template>
<div class="bio-nav-container">
    <nav-menu>
        <template slot="name">
            <slot name="name"></slot>
        </template>
    </nav-menu>
    <biography>
        <template slot="kanji">
            <slot name="kanji"></slot>
        </template>
        <template slot="age">
            <slot name="age"></slot>
        </template>
        <template slot="personality">
            <slot name="personality"></slot>
        </template>
    </biography>
</div>
</template>

<script>
import NavMenu  from './NavMenu';
import Biography  from './Biography';
export default {
  components: {
    NavMenu,
    Biography
  }
}
</script>
