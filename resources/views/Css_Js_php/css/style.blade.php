<style>
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }

    .card {
        margin: 12px;
        border-radius: 4px;
        box-shadow: 0 6px 10px rgb(0 0 0 / 8%), 0 0 6px rgb(0 0 0 / 5%);
        transition: 0.3s transform cubic-bezier(0.075, 0.82, 0.165, 1), 3s -webkit-transform cubic-bezier(0.075, 0.82, 0.165, 1);
        cursor: pointer;
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, .125);
        border-radius: 0.25rem;
    }

    .card {
        margin: 12px;
        border-radius: 4px;
        box-shadow: 0 6px 10px rgba(0, 0, 0, 0.08), 0 0 6px rgba(0, 0, 0, 0.05);
        transition: 0.3s transform cubic-bezier(0.075, 0.82, 0.165, 1),
            3s -webkit-transform cubic-bezier(0.075, 0.82, 0.165, 1);
        cursor: pointer;
    }

    .card:hover {
        transform: scale(1.07);
        box-shadow: 0 10px 20px rgb(174, 178, 225), 0 4px 8px rgb(83, 76, 101);
    }

    .img-tittle {
        color: #0e0548f1;
        text-align: center;
        font-size: 15px;
        line-height: 1.54;
        font-weight: 900;
        margin: 10px;
        padding: 3px;
    }

    .scroll-line {
        background: rgb(183, 183, 218);
        top: 0;
        left: 0;
        height: 5px;
        position: fixed;
        transition: 0.5s cubic-bezier(0.075, 0.82, 0.165, 1);
    }

    #btn-back-to-top {
        position: fixed;
        bottom: 20px;
        right: 20px;
        display: none;
        color: whitesmoke;
        background-color: #0e0548f1;
    }

    .mybtn {
        margin: 10px;
        color: #0e0b55;
        background-color: whitesmoke;
        border: 5px solid #0e0b55;
        box-shadow: 0 6px 10px rgba(131, 37, 37, 0.08), 0 0 6px rgba(0, 0, 0, 0.05);
        border-radius: 5px;
        transition: 0.3s transform cubic-bezier(0.075, 0.82, 0.165, 1);
    }

    .mybtn:hover {
        transform: scale(1.05);
        border: 5px solid gold;
        box-shadow: 0 10px 20px rgb(174, 178, 225), 0 4px 8px rgb(83, 76, 101);
    }
</style>
