import mutations from './mutations'
import * as actions from './actions'
import { localStorageObjectName } from '../../settings/settings'
import news from '../../front/news/model/news'
import { movies, genres } from '../../front/movies/model/movies'

const getLocalStorageItems = () => JSON.parse(localStorage[localStorageObjectName])

export default function () {
  return {
    actions,
    mutations,
    state: {
      appName: '',
      baseDir: '',
      canSaveBtn: false,
      count: false,
      editingName: false,
      genres,
      loaded: false,
      localStorageItems: getLocalStorageItems(),
      movies,
      news,
      requesting: {
        verb: 'idle',
        uri: ''
      },
      requested: [],
      user: {},
      working: false
    }
  }
}
