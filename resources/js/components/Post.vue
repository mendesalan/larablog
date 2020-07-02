<template>
    <div class="container">
        <button @click="sortByDate(sortedPosts)">Sort by Date</button>
        <div v-for="post in sortedPosts">
            <div class="post">
                <div class="post__card">
                    <div class="post__header">
                        <a :href="post.id" class="post__header__title">
                            <h3>{{ post.title }}</h3>
                        </a>
                        <p>{{ `${new Date(post.created_at).getMonth()}/${new Date(post.created_at).getDate()}/${new Date(post.created_at).getFullYear()}` }}</p>
                    </div>
                    <p class="post__description__textx">{{ post.description }}</p>
                </div>
            </div>
            <p v-show="canEdit">Edit Post</p>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'post-component',
        props: {
            posts: {
                type: Array,
                required: true
            },
            canEdit: {
                type: Boolean,
                required: false,
                default: false
            }
        },
        data () {
            return {
                sortedPosts: this.posts
            }
        },
        methods: {
            sortByDate (_posts) {
                const sorted = _posts.reverse()
                this.sortedPosts = sorted
            }
        }
    }

</script>
