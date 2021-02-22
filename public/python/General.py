def filterExclude(options, exclude): 
    return list(set(options) ^ set(exclude) & set(options))