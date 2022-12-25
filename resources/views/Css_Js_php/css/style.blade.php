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

    .img_width {
        object-fit: cover;
        width: 40%;
        height: 100%;
    }

    .img_td {
        width: 100%;
        height: 100%;
        max-width: 100%;
        max-height: 100%;
    }


    /* Home page cards css */

    * {
        margin: 0;
        padding: 0;
    }

    .fab {
        position: fixed;
        bottom: 82px;
        right: 26px;
        border-radius: 50%;
        width: 65px;
        height: 65px;
        /*background: #D12027;*/
        /*box-shadow: 1px 2px 1px red;*/
        z-index: 100001;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }

    .fab:hover {
        cursor: pointer;
    }

    .fabT:hover {
        cursor: pointer;
    }

    .fab img {
        width: 93%;
        /*transform: rotate(45deg);*/
        transition: 1s;
    }

    .fabT p {
        /*transform: rotate(45deg);*/
        transition: 0.4s;
    }

    .chatbox {
        z-index: 100001;
        position: fixed;
        bottom: 110px;
        right: 18px;
        height: 0px;
        transition-delay: 0.3s;
        width: 100px;
        transition: 0.5s cubic-bezier(0.445, 0.05, 0.55, 0.95);
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .things {
        overflow: hidden;
        border-radius: 50%;
        display: block;
        transition: 0.4s ease-in;
    }

    .things {
        overflow: hidden;
        border-radius: 50%;
        transition: 0.4s ease-in;
        width: 100px;
        height: 70px;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        /* box-shadow: 1px 1px 3px grey; */
    }

    .things1 {
        transition-delay: 0.2s;
        /* background: blue; */
    }

    .things2 {
        transition-delay: 0.2s;
        /* background: blue; */
    }

    .things3 {
        transition-delay: 0.3s;
        /* background: rgb(255, 0, 0); */
    }

    .things5 {
        transition-delay: 0.4s;
        /* background: rgb(255, 0, 0); */
    }

    .things4 {
        transition-delay: 0.4s;
        background: blue;
        margin-bottom: 69px;
    }

    .things:hover {
        cursor: pointer;
    }

    .things:hover img {
        transform: rotate(360deg);
        /*    -webkit-transform: scale(1.2);*/
        transition: all 0.5s;
    }

    .chatbox-active {
        height: 242px;
        z-index: 100001;
    }

    .fab-active img {
        transform: rotate(360deg);
        cursor: pointer;
    }

    .fabT-active p {
        transform: rotate(360deg);
    }

    .fabT {
        position: fixed;
        width: 135px;
        background: white;
        box-shadow: 1px 2px 4px grey;
        z-index: 100;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .chat-button {
        z-index: 100001;
        padding: 25px 16px;
        /*  background: #2C50EF;*/
        background: black;
        width: 140px;
        height: 12px;
        box-sizing: border-box;
        bottom: 28px;
        right: 15px !important;
        margin: 15px;
        border-top-left-radius: 25px;
        border-bottom-left-radius: 25px;
        border-bottom-right-radius: 25px;
        box-shadow: 0 2px 15px rgba(44, 80, 239, 0.21);
        cursor: pointer;
    }

    @media only screen and (max-width: 760px) {
        .fab {
            width: 45px;
            height: 45px;
            right: 7px;
            bottom: 55px;
        }

        .chatbox {
            right: 10px !important;
            bottom: 86px !important;
            right: 0px !important;
            width: 82px;
        }

        .img11 {
            height: 37px !important;
            width: 37px !important;
        }

        .img12 {
            height: 45px !important;
            width: 45px !important;
        }

        .img13 {
            height: 40px !important;
            width: 40px !important;
        }
    }

    .theme-background-color {
        background-color: #d12027;
    }

    .chatbox a {
        min-height: 0 !important;
    }
</style>
