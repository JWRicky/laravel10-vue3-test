<template>
    <AuthFormComponent />
</template>
  
<script>
import AuthFormComponent from './components/AuthFormComponent.vue';

export default {
    name: 'App',
    components: {
        AuthFormComponent
    },
}
</script>
  
<style>
#app {
    font-family: Avenir, Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #2c3e50;
    margin-top: 0px;
}

/* CSS Document */
/* ==================== 全て共通 ==================== */
html,
body {
    font-size: 16px;
    font-family: sans-serif;
    color: #3c3c3c;
    background: #fff;
    scroll-behavior: smooth;
}

body,
div,
p,
h1,
h2,
h3,
h4,
ul,
figure {
    margin: 0;
    padding: 0;
}

p,
td,
th,
li {
    line-height: 1.8;
}

a {
    text-decoration: none;
}

img {
    width: 100%;
    height: auto;
    vertical-align: middle;
}

dl {
    margin: 0;
}

.container {
    margin: 0 auto;
    max-width: 1280px;
    padding: 0px 90px;
}

/* ==================== CONTACT ==================== */

.contact-container h1 {
    padding: 15% 0 10%;
    text-align: center;
    letter-spacing: 0.2rem;
}

.contact-container h1 span {
    display: block;
    font-size: 16px;
    font-weight: normal;
}

form {
    margin: 0 auto;
    max-width: 1150px;
    min-width: 700px;
}

.dl-flex {
    display: flex;
    flex-wrap: wrap;
}

.dl-flex>dt>span:first-child {
    display: inline-block;
    padding: 0 10px;
    margin-left: 1rem;
    font-size: 0.9rem;
    color: #fff;
    background-color: #dc3232;
}

.dl-flex>dt>span:nth-child(2) {
    display: block;
    font-size: smaller;
}

.dl-flex dt {
    width: calc(10rem + 40px);
    padding: 30px;
    box-sizing: border-box;
    border-top: solid 1px #d4d4d4;
    border-right: solid 1px #d4d4d4;
    border-left: solid 1px #d4d4d4;
    background-color: #fafafa;
}

.dl-flex dd {
    width: calc(100% - (10rem + 40px));
    margin-left: 0;
    /* 初期値打ち消し*/
    padding: 30px 30px 20px 30px;
    box-sizing: border-box;
    border-top: solid 1px #d4d4d4;
    border-right: solid 1px #d4d4d4;
}

input {
    border: solid 1px #d4d4d4;
}

::placeholder {
    color: #999;
}

/* 旧Edge対応 */
::-ms-input-placeholder {
    color: #999;
}

/* IE対応 */
:-ms-input-placeholder {
    color: #999;
}

input:focus {
    outline: 0;
    /* noneでも大丈夫 */
    border: solid 1px #d4d4d4;
}

.input-style {
    width: 100%;
    padding: 0 10px;
    box-sizing: border-box;
    margin-bottom: 20px;
    line-height: 2.5rem;
    background-color: #fafafa;
}

input[type=radio] {
    margin-right: 5px;
}

textarea {
    width: 100%;
    resize: vertical;
    min-height: 260px;
    margin-bottom: 10px;
    border-color: #d4d4d4;
}

textarea:focus {
    outline: 0;
}

.radio-width {
    display: inline-block;
    width: calc(47% - 5px);
    margin-bottom: 10px;
}

.form-item {
    padding: 5% 0;
    border-top: solid 1px #d4d4d4;
    border-bottom: solid 1px #d4d4d4;
    text-align: center;
}

.form-item a:visited {
    color: #dc3232;
}

.form-item a {
    color: #dc3232;
    text-decoration: underline;
    transition: 0.3s;
}

.form-item a:hover {
    opacity: 0.7;
    text-decoration: none;
}

input[type=submit] {
    width: 200px;
    height: 60px;
    margin: 3%;
    color: #fff;
    background-color: #ef9800;
    border: solid 1px #ef9800;
    transition: 0.5s;
}

input[type=submit]:hover {
    color: #ef9800;
    background-color: #fff;
    border: solid 1px #ef9800;
    box-sizing: border-box;
}</style>
  