<template>
    <div id="app">
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" v-model="searchQuery">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</template>

<script>
    var app = new Vue ({

        el: '#app',

        data: {
            searchQuery: '',
            list: attendance
        },

        computed: {

            filteredView() {
                return this.attendance.filter( l => {
                    return this.searchQuery.toLowerCase()
                        .split(/\s+/)
                        .map( q => l.id.toLowerCase().indexOf(q) > -1 || l.description.toLowerCase().indexOf(q) > -1 )
                        .every( result => result === true )
                })
            }
        }

    })
</script>