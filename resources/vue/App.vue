<template>
    <div id="appWrapper" class="">
        <div class="container">
            <div class="search-box">
                <input class="search-input" type="text" placeholder="Search...">
                <ul class="result-list show">
                    <li v-for="x in 10" class="resulti-item">
                        <a href="a" class="result-link">
                            <div class="result-title">Name</div>
                            <div class="result-content">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Nemo saepe doloremque inventore iusto perspiciatis laudantium fuga,
                quia possimus quis similique vel suscipit! Similique nisi
                reprehenderit voluptate sapiente deserunt reiciendis eaque?
            </p>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            text: 'Hello world!',
        }
    }
}
</script>

<style>

    body {
        font-family: sans-serif;
    }

    ::-webkit-scrollbar {
        width: 10px;
    }

    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #888;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #555;
    }

    .container {
        padding: 30px;
    }

    .search-box {
        position: relative;
        display: flex;
        align-items: center;
        flex-direction: column;
    }

    .search-input {
        width: 600px;
        height: 30px;
        border-radius: 10px;
        border: 0;
        background: #eeeeee;
        padding: 10px 20px;
        font-size: 18px;
        outline: none;
    }

    .result-list.show {
        position: absolute;
        width: 640px;
        max-height: 250px;
        overflow-y: auto;
        list-style: none;
        background: #fff;
        padding: 0;
        top: 40px;
        border-radius: 10px;
        box-shadow: 1px 2px 8px 0px #b5b5b5;
        margin: 7px 0px;
    }

    .result-list.hide {
        display: none;
    }

    .result-item {
        border-bottom:  1px solid #ececec;
    }

    .result-link {
        text-decoration: none;
        color: #333;
        display: block;
        padding: 10px 15px;
    }

    .result-link {
        background:  #f9f9f9;
    }

    .result-title {
        font-size: 14px;
        font-weight: 600;
    }

    .result-content {
        font-size: 12px;
    }

</style>
